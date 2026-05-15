<?php
// Koneksi Database
$host = 'localhost';
$user = 'root'; // Ganti jika berbeda
$pass = ''; // Ganti jika ada password
$db = 'db_company_profile'; // Sesuai file .sql Anda

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika perlu, set charset
mysqli_set_charset($conn, 'utf8');
?>