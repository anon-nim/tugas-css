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
    <title>First Drive: Jetour X70 Plus, Pesaing Terberat Tiggo 8</title>
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
        <h1 class="title">First Drive: Jetour X70 Plus, Pesaing Terberat Tiggo 8</h1>
        <p class="content">
            OTODRIVER – Dalm sesi peluncuran dua produk Jetour awal bulan lalu, kami diberi kesempatan mencoba SUV X70 Plus yang kini diandalkan di pasar Indonesia mulai Rp 414,8 juta untuk tipe Journey, sampai Rp 444,8 juta untuk tipe Inspira.

Secara desain, X70 Plus tampak modern dan terlihat punya tampang yang agresif. Body sampingnya juga clean dan dipersenjatai pelek dual tone yang sporty. Bentuk belakangnya juga menawarkan kesan mobil masa depan. Mirip-mirip dengan SUV China lainnya.

Berlanjut ke interior. Agar terasa beda dengan brand Tiongkok lainnya, Jetour X70 Plus dibekali dengan layar ganda yang meliputi head unit dan panel instrumen yang sudah sepenuhnya digital.

Yang kami sukai meski treknya begitu sempit di parkiran Senayan. Namun sebetulnya mobil ini dipersenjati mesin yang tidak main-main. Ia mengandalkan mesin turbo 1.500 cc  yang menghasilkan tenaga 154 hp pada 5.500 rpm dan torsi 230 Nm antara 1.750 dan 4.000 rpm.

Namun dalam pengujian singkat, kami merasa transmisinya masih kurang responsif kala menanjak. Terasa ada gap untung menambah power.

Butuh effort lebih dalam menginjak pedal gas untuk mencapai kecepatan di atas 30 Km per jam. Saat menjajal mode sport, akselerasi terasa lebih responsif, penyaluran tenaganya tidak seperti mode ECO. Perbedaan kedua mode berkendara ini cukup signifikan.

Mengincar pasarnya CR-V dan SUV Tiongkok lain seperti Tiggo 8, Jetour X70 Plus enteng jika dibandingkan dengan SUV 7-penumpang di kelasnya. Namun, saat di ajak manuver handling Jetour X70 Plus cukup stabil.

Saat ini Jetour X70 Pus sudah resmi dijual, dan secara apple to apple, mobil ini berada di kolom yang sama dengan Tiggo 8. (AB)
        </p>
        <a href="/dashboard.php" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>