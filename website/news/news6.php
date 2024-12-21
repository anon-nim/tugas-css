<?php
// Lokasi file log halaman
$page_log_file = __DIR__ . '/logs/page_log.csv';

// Fungsi untuk mencatat perpindahan halaman
function logPageTransition($from_page, $to_page, $log_file)
{
    // Pastikan folder log ada
    $log_dir = dirname($log_file);
    if (!is_dir($log_dir)) {
        mkdir($log_dir, 0777, true);
    }

    // Jika file belum ada, tambahkan header "From,To"
    if (!file_exists($log_file)) {
        file_put_contents($log_file, "From,To\n");
    }

    // Catat data log tanpa timestamp
    $log_entry = "$from_page,$to_page\n";
    file_put_contents($log_file, $log_entry, FILE_APPEND);
}

// Tangkap halaman asal dan tujuan
$from_page = isset($_SERVER['HTTP_REFERER']) ? basename(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH)) : 'unknown';
$to_page = basename($_SERVER['PHP_SELF']);

// Catat perpindahan halaman
logPageTransition($from_page, $to_page, $page_log_file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 Merek Mobil Terlaris di Indonesia, Brand China Mulai Berjaya</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .title {
            font-size: 2em;
            color: #004d40;
            margin-bottom: 10px;
        }

        .content {
            font-size: 1em;
            line-height: 1.6;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #00796b;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .back-link:hover {
            color: #004d40;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">10 Merek Mobil Terlaris di Indonesia, Brand China Mulai Berjaya</h1>
        <p class="content">
            OTODRIVER - Penjualan mobil di Indonesia pada November 2024 menunjukkan kondisi yang dinamis, di mana secara distribusi dari pabrik ke diler atau melambat tetapi penjualan ritelnya naik dibandingkan satu bulan sebelumnya.

Berdasarkan data Gabungan Industri Kendaraan Bermotor Indonesia (Gaikindo) total wholesales pada periode dimaksud mencapai 74.347 unit, turun 3,7 persen daripada Oktober 2024 lalu sebanyak 77.226 unit. Sedangkan penjualan ritel, dari diler ke konsumen tumbuh 3,5 persen yakni dari 73.475 unit menjadi 76.053 unit.

Untuk saat ini, Toyota masih mempertahankan posisinya sebagai merek terlaris dengan penjualan wholesales sebanyak 26.984 unit, sedikit menurun dari capaian Oktober sebesar 27.030 unit.

Sementara itu, Daihatsu tetap di posisi kedua dengan penjualan 10.030 unit, mengalami penurunan signifikan dibandingkan Oktober yang mencatat 14.096 unit.

Honda mencatat penjualan 8.397 unit pada November, sedikit lebih rendah dibandingkan 8.633 unit di Oktober.

Adapun Suzuki naik ke posisi keempat (5.605 unit), mengungguli Mitsubishi Motors yang berada di posisi kelima dengan 6.050 unit pada bulan ini.

Pemain baru di pasar, BYD, terus menunjukkan pertumbuhan signifikan. Pada November, penjualan wholesales BYD mencapai 2.842 unit, naik dari 2.488 unit pada Oktober, dan tetap berada di peringkat keenam.

“Mengingat kami hanya menjual EV, perolehan angka tersebut menunjukkan EV awarness di Indonesia cukup berkembang pesat. Di sini kepercayaan brand BYD juga luar biasa,” ucap Luther T. Panjaitan selaku Head of Maarketing PR &Goverment BYD Indonesia.
        </p>
        <a href="/dashboard.php" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>