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
    <title>BYD Dolphin Facelift, Ada Opsi Baterai Lebih Kecil Dengan Banderol Lebih Terjangkau</title>
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
        <h1 class="title">BYD Dolphin Facelift, Ada Opsi Baterai Lebih Kecil Dengan Banderol Lebih Terjangkau</h1>
        <p class="content">
            Ministry of Industry and Information Technology (MIIT) China dikabarkan memperkenalkan hatchback BYD Dolphin yang baru pada tanggal 9 Desember 2024.

Sebagai model facelift, mobil baru ini mengalami sedikit perubahan tampilan dan menambahkan opsi motor listrik 130 kW (174 hp) untuk harga yang lebih murah dan jangkauan lebih sedikit. Sebagai referensi, BYD Dolphin 2025 di pasar China memiliki kisaran harga antara 99.800 hingga 129.800 yuan (13.700– 17.900 dolar AS) atau sekitar Rp 217 juta hingga Rp 284 juta.

Seperti dilaporkan Carnewschina pada Selasa (10/12) waktu setempat, BYD Dolphin terjual sebanyak 21.712 unit pada bulan November, sehingga penjualan kumulatifnya pada tahun 2024 menjadi 176.560 unit. Dibandingkan dengan model 2025 yang dijual, bagian depan bawah di kedua sisi telah disesuaikan.

Dari samping, garis bodi tidak berubah begitu pula gagang pintu semi-tersembunyi. Di bagian belakang, logo asli “Build Your Dream” yang tertanam di lampu belakang telah diperbarui menjadi logo “BYD”.

Pada saat yang sama, desain interior lampu belakang dan bagian bawah belakang juga telah disesuaikan. Mobil baru ini menggunakan ban 195/60R16 atau 205/50R17.

Untuk dimensinya, BYD Dolphin hadir dengan PxLxT: 4.280/1.770/1.570 mm, dan jarak sumbu rodanya 2.700 mm; yang berarti 155 mm lebih panjang dari model 2.025 yang dijual. Tiga bobot kosong kendaraan diumumkan, yaitu 1435 kg, 1480 kg, dan 1600 kg.

Seluruh seri dikabarkan akan terus menggunakan paket baterai Blade LFP milik BYD. Kecepatan tertingginya adalah 150 km/jam dan 160 km/jam, tergantung pada trim-nya.Sebagai referensi, BYD Dolphin 2025 menawarkan dua pilihan daya, trim daya rendah memiliki daya maksimum 70 kW dan torsi puncak 180 Nm, sedangkan trim daya tinggi memiliki daya maksimum 150 kW dan torsi puncak 310 Nm.
        </p>
        <a href="/dashboard.php" class="back-link">← Kembali ke Dashboard</a>
    </div>
</body>
</html>