<?php
// Lokasi log
$log_dir = __DIR__ . '/logs';
$log_file = $log_dir . '/login_log.csv';

// Buat folder jika belum ada
if (!is_dir($log_dir)) {
    if (!mkdir($log_dir, 0777, true)) {
        error_log("Failed to create directory: $log_dir");
        die("Error: Cannot create logs directory.");
    }
}

// Pastikan folder dapat ditulis
chmod($log_dir, 0777);

// Tangkap data POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    if ($data && isset($data['username']) && isset($data['status'])) {
        // Cek apakah file log sudah ada; jika belum, tambahkan header CSV
        $is_new_file = !file_exists($log_file);

        $log_entry = [
            $data['username'],
            $data['status']
        ];

        $file = fopen($log_file, 'a');
        if ($file) {
            // Tulis data log ke file CSV
            fputcsv($file, $log_entry);
            fclose($file);

            echo json_encode(['message' => 'Log saved successfully']);
        } else {
            error_log("Failed to write to file: $log_file");
            echo json_encode(['message' => 'Error: Cannot write to log file.']);
        }
    } else {
        error_log("Invalid JSON structure: " . json_encode($data));
        echo json_encode(['message' => 'Error: Invalid input data.']);
    }
} else {
   http_response_code(405);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sederhana</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a00ff, #7b1fa2, #3700b3);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            margin: 30px;
            padding: 0;
            color: white;
        }

        header {
            color: white;
            text-align: center;
            padding: 40px 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .container {
            max-width: 400px;
            margin: 10px auto;
            padding: 20px;
            background: white;
            color: black;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h1, h2 {
            text-align: center;
            margin: 0 0 20px;
            font-family: 'Trebuchet MS', sans-serif;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #6200ea;
            box-shadow: 0 0 5px rgba(98, 0, 234, 0.5);
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #6200ea;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
        }

        button:hover {
            background-color: #3700b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        button:active {
            transform: translateY(0);
        }

        .hint {
            font-size: 0.9em;
            color: #666;
            text-align: center;
            margin-top: 10px;
            font-style: italic;
        }

        .message {
            font-size: 0.9em;
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .footer-text {
            margin-top: 70px;
            font-size: 0.9em;
            color: white;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            background: none; /* Menghapus background */
            padding: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Login Web Sederhana</h1>
    </header>
    <div class="container">
        <h2>Login</h2>
        <input type="text" id="username" placeholder="Username">
        <input type="password" id="password" placeholder="Password">
        <button id="loginButton" onclick="login()">Masuk</button>
        <p id="loginMessage" class="message"></p>
        <p class="hint">Hint: Username: <b>admin</b>, Password: <b>admin123</b></p>
    </div>
    <p class="footer-text">© 2024 | Login Web Sederhana</p>

<script>
    const users = [
        { username: "admin", password: "admin123" },
        { username: "user", password: "user123" }
    ];

    async function login() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        const user = users.find(u => u.username === username && u.password === password);
        const messageElement = document.getElementById('loginMessage');
        const status = user ? 'success' : 'failed';

        // Tampilkan pesan login di UI
        if (user) {
            messageElement.textContent = "Login berhasil!";
            messageElement.style.color = "green";

            // Tampilkan efek kembang api
            showFireworks();

            // Redirect ke dashboard.php
            setTimeout(() => {
                window.location.href = 'dashboard.php';
            }, 3000); // Tunggu 3 detik sebelum redirect
        } else {
            messageElement.textContent = "Username atau password salah!";
            messageElement.style.color = "red";
        }

        // Kirim log ke server
        try {
            const response = await fetch(window.location.href, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ username, status })
            });
            const result = await response.json();
            console.log(result.message);
        } catch (error) {
            console.error('Error:', error);
        }
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            document.getElementById('loginButton').click();
        }
    });

    function showFireworks() {
        const canvas = document.createElement('canvas');
        canvas.style.position = 'fixed';
        canvas.style.top = '0';
        canvas.style.left = '0';
        canvas.style.width = '100%';
        canvas.style.height = '100%';
        canvas.style.pointerEvents = 'none';
        canvas.style.zIndex = '9999';
        document.body.appendChild(canvas);

        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        let particles = [];
        const colors = ['#ff6b6b', '#ff922b', '#4c6ef5', '#15aabf', '#51cf66', '#faa2c1'];

        function createParticles(x, y) {
            for (let i = 0; i < 50; i++) {
                particles.push({
                    x: x,
                    y: y,
                    radius: Math.random() * 4 + 1,
                    color: colors[Math.floor(Math.random() * colors.length)],
                    velocityX: (Math.random() - 0.5) * 10,
                    velocityY: (Math.random() - 0.5) * 10,
                    life: Math.random() * 100 + 50
                });
            }
        }

        function updateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            particles.forEach((particle, index) => {
                particle.x += particle.velocityX;
                particle.y += particle.velocityY;
                particle.life -= 1;

                ctx.beginPath();
                ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2, false);
                ctx.fillStyle = particle.color;
                ctx.fill();

                if (particle.life <= 0) {
                    particles.splice(index, 1);
                }
            });

            if (particles.length > 0) {
                requestAnimationFrame(updateParticles);
            } else {
                document.body.removeChild(canvas);
            }
        }

        const centerX = canvas.width / 2;
        const centerY = canvas.height / 2;
        createParticles(centerX, centerY);
        updateParticles();
    }
</script>
</body>
</html>