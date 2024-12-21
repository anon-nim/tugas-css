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
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #6a00ff, #7b1fa2, #3700b3);
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            margin: 20;
            padding: 0;
        }

        header {
            text-align: center;
            padding: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #ffffff;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .news-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 20px auto;
            padding: 20px;
            max-width: 1200px;
        }

        .news-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .news-content {
            padding: 15px;
        }

        .news-title {
            font-size: 1.5em;
            color: #004d40;
            margin: 0 0 10px;
        }

        .news-title a {
            text-decoration: none;
            color: inherit;
        }

        .news-title a:hover {
            color: #00796b;
        }

        .news-summary {
            font-size: 1em;
            line-height: 1.6;
            color: #333;
        }

        .news-date {
            font-size: 0.9em;
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Berita Terkini</h1>
    </header>

    <div class="news-container">
        <div class="news-card">
            <img src="https://otodriver.com/image/load/650/366/gallery/toyota-rav4_4688.jpeg" alt="Berita Pertama" class="news-image">
            <div class="news-content">
                <h2 class="news-title"><a href="/news/news1.php">10 Merk Mobil Terlaris di Indonesia, Brand China Mulai Berjaya</a></h2>
                <p class="news-summary">Penjualan mobil di Indonesia pada November 2024 menunjukkan kondisi yang dinamis, ...</p>
                <p class="news-date">Dipublikasikan pada: Rabu, 11 Desember 2024 10:42 WIB</p>
            </div>
        </div>
        <div class="news-card">
            <img src="https://otodriver.com/image/load/650/366/gallery/jetour_2024_crmr.jpeg" alt="Berita Kedua" class="news-image">
            <div class="news-content">
                <h2 class="news-title"><a href="/news/news2.php">First Drive: Jetour X70 Plus, Pesaing Terberat Tiggo 8</a></h2>
                <p class="news-summary">OTODRIVER – Dalam sesi peluncuran dua produk Jetour awal bulan lalu, ...</p>
                <p class="news-date">Dipublikasikan pada: Selasa, 10 Desember 2024 13:30 WIB</p>
            </div>
        </div>
        <div class="news-card">
            <img src="https://otodriver.com/image/load/650/366/gallery/byd_dolphin_2024_jxbk.jpeg" alt="Berita Ketiga" class="news-image">
            <div class="news-content">
                <h2 class="news-title"><a href="/news/news3.php">BYD Dolphin Facelift, Ada Opsi Baterai Lebih Kecil Dengan Banderol Lebih Terjangkau</a></h2>
                <p class="news-summary">Ministry of Industry and Information Technology (MIIT) China dikabarkan ...</p>
                <p class="news-date">Dipublikasikan pada: Selasa, 10 Desember 2024 15:00 WIB</p>
            </div>
        </div>
        <div class="news-card">
            <img src="https://otodriver.com/image/load/650/366/gallery/wuling_2024_fzqc.JPG" alt="Berita Keempat" class="news-image">
            <div class="news-content">
                <h2 class="news-title"><a href="/news/news4.php">Wuling Sodorkan Program Menarik Untuk EV dan SUVnya Hingga Desember</a></h2>
                <p class="news-summary">Mobil listrik mulai diterima di pasar Indonesia dan Wuling pun dikenal sebagai ...</p>
                <p class="news-date">Dipublikasikan pada: Selasa, 10 Desember 2024 14:00 WIB</p>
            </div>
        </div>
        <div class="news-card">
            <img src="https://otodriver.com/image/load/650/366/gallery/uid-trucks-giias-20243360.jpg" alt="Berita Kelima" class="news-image">
            <div class="news-content">
                <h2 class="news-title"><a href="/news/news5.php">Sukses di Tahun Ini, UD Trucks Siapkan Produk Baru Tahun Depan</a></h2>
                <p class="news-summary">Menyongsong eksistensinya yang akan menginjak usia ke-90 tahun di pasar global dan ...</p>
                <p class="news-date">Dipublikasikan pada: Rabu, 11 Desember 2024 06:00 WIB</p>
            </div>
        </div>
        <div class="news-card">
            <img src="https://otodriver.com/image/load/650/366/gallery/uid-trucks-giias-20243360.jpg" alt="Berita Kelima" class="news-image">
            <div class="news-content">
                <h2 class="news-title"><a href="/news/news6.php">Sukses di Tahun Ini, UD Trucks Siapkan Produk Baru Tahun Depan</a></h2>
                <p class="news-summary">Menyongsong eksistensinya yang akan menginjak usia ke-90 tahun di pasar global dan ...</p>
                <p class="news-date">Dipublikasikan pada: Rabu, 11 Desember 2024 06:00 WIB</p>
            </div>
        </div>
    </div>
</body>
</html>