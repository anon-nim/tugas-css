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
    <title>Wuling Sodorkan Program Menarik Untuk EV dan SUVnya Hingga Desember</title>
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
        <h1 class="title">Wuling Sodorkan Program Menarik Untuk EV dan SUVnya Hingga Desember</h1>
        <p class="content">
            Mobil listrik mulai diterima di pasar Indonesia dan Wuling pun dikenal sebagai salah satu pelopor mobil listrik murni dengan harga terjangkau di Indonesia. Pabrikan berlogo lima berlian in pun

Program Worry-Free Bersama Wuling EV menjadi bentuk komitmen Wuling untuk memberikan ketenangan dan kenyamanan bagi konsumen pengguna EVnya. “Kami ingin memastikan pengalaman berkendara ramah lingkungan yang bebas dari rasa khawatir bagi pelanggan kami,” ungkap Ricky Christian, Marketing Operation Director Wuling Motors.

Program ini berlaku untuk pembeli Wuling EV ABC Stories (Air ev, Binguo EV dan Cloud EV) Salah satu keunggulan utama dari program ini adalah garansi seumur hidup untuk komponen inti kendaraan listrik termasuk motor listrik, motor control unit dan baterai. Dengan adanya perlindungan ini, pelanggan tidak perlu mengkhawatirkan keandalan komponen utama kendaraan mereka.

Sebagai tambahan, pembeli Air ev juga mendapatkan voucher listrik senilai Rp2 juta untuk pemakaian selama satu tahun, Sementara itu, untuk pembeli BinguoEV dan Cloud EV, Wuling memberikan gratis DC Adapter untuk meningkatkan efisiensi dalam pengisian daya kendaraan.

Tak melulu mengenai mobil listrik, Wuling pun memberikan perhatian pada pelanggan di segmen SUV melalui program ‘Berani Lebih Bersama Wuling SUV.’ Di mana Wuling memberikan nilai lebih kepada konsumen yang ingin membeli Wuling seri Alvez dan seri Almaz. “Wuling memberi jaminan nilai jual kembali yang kompetitif, gratis biaya perawatan, dan garansi seumur hidup untuk komponen utama hybrid,” tambah Ricky.

Sebagai gambaran Wuling memberikan jaminan nilai jual kembali sebesar 70% di tahun ketiga kepemilikan. Jaminan ini berlaku mulai bulan ke-25 hingga bulan ke-36 setelah tanggal pembelian, dengan beberapa syarat dan ketentuan. Apabila nilai penjualan unit lama melebihi harga unit baru saat melakukan tukar tambah, pelanggan akan menerima selisihnya.

Selain itu, Wuling juga menawarkan gratis biaya jasa perawatan berkala selama 8 tahun atau hingga 100.000 kilometer, tergantung mana yang tercapai lebih dulu. Layanan ini memungkinkan konsumen untuk menikmati perjalanan tanpa harus memikirkan biaya tambahan untuk perawatan rutin kendaraan mereka, sehingga mereka dapat lebih fokus pada kenyamanan berkendara. Keunggulan lain dari program ini adalah garansi seumur hidup untuk komponen utama hybrid yang mencakup tiga komponen inti kendaraan listrik, yakni Power Battery, Motor Controller, dan Drive Motor.
        </p>
        <a href="/dashboard.php" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>