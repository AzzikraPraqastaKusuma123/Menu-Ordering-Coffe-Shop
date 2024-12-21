<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Koneksi ke database (ganti dengan informasi koneksi sesuai kebutuhan)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "cafe_nafora";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data barang
$sql = "SELECT id_barang, nama_barang, harga_barang, jumlah_barang FROM barang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_barang"]. " - Nama: " . $row["nama_barang"]. " - Harga: Rp " . $row["harga_barang"]. " - Stok: " . $row["jumlah_barang"]. "<br>";
    }
} else {
    echo "0 hasil";
}
$conn->close();
?>

</body>
</html>
