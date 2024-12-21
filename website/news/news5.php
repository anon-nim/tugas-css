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
    <title>Sukses di Tahun Ini, UD Trucks Siapkan Produk Baru Tahun Depan</title>
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
        <h1 class="title">Sukses di Tahun Ini, UD Trucks Siapkan Produk Baru Tahun Depan</h1>
        <p class="content">
            Menyongsong eksistensinya yang akan menginjak usia ke-90 tahun di pasar global dan 50 tahun di Indonesia tahun depan, UD Trucks di Indonesia berhasil mencetak tiga pencapaian terbaik di tahun ini. Salah satunya dari sektor penjualan produk yang mencapai 1.800 unit dan lebih tinggi dari tahun lalu, walau segmen pasar truk heavy duty di Tanah Air mengalami penurunan 20%.

Demikian seperti yang diungkap President Director of UD Trucks Indonesia, Toshihiko Odawara. “Pencapaian ini merupakan hal yang luar biasa bagi kami. Dukungan penuh terus diberikan partner kami yakni Astra International Indonesia dan United Tractors,” ujar Toshihiko di Menteng, Jakarta (10/12).

Ia menambahkan, pencapaian berikutnya adalah peluncuran model terbaru UD Trucks di GIIAS 2024 Juli lalu, yang turut memberi kontribusi besar. Dengan dirilisnya Quester bertransmisi AMT yang dinamai ESCOT (Easy and Safe Controlled Transmission), diklaim mampu menjawab kebutuhan pasar yang menginginkan truk heavy duty dengan konsumsi bahan bakar lebih hemat serta lebih mudah dan nyaman dikendarai.

Selanjutnya adalah tim UD Trucks Indonesia berhasil menjuarai dua kompetisi internasional UD Trucks yang digelar di Jepang tahun ini. Seperti di UD Extra Mile Challenge 2024 untuk pengendara truk yang digelar Oktober lalu. Begitu pula di UD Gemba Challenge 2024 November lalu yang merupakan kompetisi internasional bagi teknisi UD Trucks.

Pencapaian ini tentu dapat meningkatkan kepercayaan konsumen pada UD Trucks, yang tidak hanya menjual truk tapi juga menyediakan layanan purna jual terbaik. Berupa memberi kualitas layanan mekanik yang andal dan ketersediaan spare part yang terjamin. Hal itu disampaikan Chief Executive Officer Astra UD Trucks, Winarto Martono.

“Dengan kualitas dan kuantitas mekanik dan spare part yang terus ditingkatkan, tentu membuat usia pakai truk menjadi lebih panjang, bisa sampai 10 hingga 15 tahun. Hal ini berujung produktivitas truk sekaligus perolehan income jadi lebih lama. Jadi return on investment jelas menguntungkan,” promosi Winarto.


        </p>
        <a href="/dashboard.php" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>