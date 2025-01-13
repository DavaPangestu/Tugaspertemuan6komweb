<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "komwebcihuy";
$port = 3306;

// Aktifkan mode exception
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname, $port);
    
    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
} catch (mysqli_sql_exception $error) {
    // Ketika terjadi kesalahan koneksi
    echo "Koneksi gagal: " . $error->getMessage();
}
?>
