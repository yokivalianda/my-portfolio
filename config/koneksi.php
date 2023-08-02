<?php
// Konfigurasi koneksi database
$host = "localhost"; // Ganti dengan nama host database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "portfolio"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$connection = new mysqli($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($connection->connect_error) {
    die("Koneksi database gagal: " . $connection->connect_error);
} else {
    echo "Koneksi database berhasil!";
}

// Anda dapat melakukan operasi database lainnya di sini...

// Menutup koneksi
$connection->close();
?>
