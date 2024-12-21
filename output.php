<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="css/output.css">
</head>
<body>
<?php
$nama_pelanggan = isset($_GET['nama_pelanggan']) ? $_GET['nama_pelanggan'] : '';
$alamat_pelanggan = isset($_GET['alamat_pelanggan']) ? $_GET['alamat_pelanggan'] : '';
$nomor_hp = isset($_GET['nomor_hp']) ? $_GET['nomor_hp'] : '';

$nama_item1 = isset($_GET['nama_item1']) ? $_GET['nama_item1'] : '';
$harga_item1 = isset($_GET['harga_item1']) ? $_GET['harga_item1'] : '';
$jumlah1 = isset($_GET['jumlah1']) ? $_GET['jumlah1'] : '';

$nama_item2 = isset($_GET['nama_item2']) ? $_GET['nama_item2'] : '';
$harga_item2 = isset($_GET['harga_item2']) ? $_GET['harga_item2'] : '';
$jumlah2 = isset($_GET['jumlah2']) ? $_GET['jumlah2'] : '';

$nama_item3 = isset($_GET['nama_item3']) ? $_GET['nama_item3'] : '';
$harga_item3 = isset($_GET['harga_item3']) ? $_GET['harga_item3'] : '';
$jumlah3 = isset($_GET['jumlah3']) ? $_GET['jumlah3'] : '';

$total_harga1 = intval($harga_item1) * intval($jumlah1);
$total_harga2 = intval($harga_item2) * intval($jumlah2);
$total_harga3 = intval($harga_item3) * intval($jumlah3);
$total_harga = $total_harga1 + $total_harga2 + $total_harga3;

if ($total_harga > 100000) {
    $diskon = 0.1 * $total_harga; 
    $total_harga -= $diskon; 
    $pesan_diskon = "Selamat! Anda mendapatkan diskon 10%.";
} else {
    $pesan_diskon = "Maaf, Anda tidak mendapatkan diskon kali ini.";
}

echo "<h1>Terima kasih, $nama_pelanggan!</h1>";
echo "<p>Alamat: $alamat_pelanggan</p>";
echo "<p>Nomor HP: $nomor_hp</p>";
echo "<h2>Detail Pesanan:</h2>";

echo "<p>Barang 1: $nama_item1</p>";
echo "<p>Harga: $harga_item1</p>";
echo "<p>Jumlah: $jumlah1</p><br>";

echo "<p>Barang 2: $nama_item2</p>";
echo "<p>Harga: $harga_item2</p>";
echo "<p>Jumlah: $jumlah2</p><br>";

echo "<p>Barang 3: $nama_item3</p>";
echo "<p>Harga: $harga_item3</p>";
echo "<p>Jumlah: $jumlah3</p><br>";

echo "<h3>Total Harga: $total_harga</h3>";
echo "<p>$pesan_diskon</p>";

?>

</body>
</html>
