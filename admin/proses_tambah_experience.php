<!-- process_add_experience.php -->
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
}

// Menyimpan data baru ke dalam database jika formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST["tanggal"];
    $posisi = $_POST["posisi"];
    $perusahaan = $_POST["perusahaan"];
    $ket = $_POST["ket"];

    // Insert data ke tabel
    $insertQuery = "INSERT INTO experience (tanggal, posisi, perusahaan, ket) VALUES ('$tanggal', '$posisi', '$perusahaan', '$ket')";
    $insertResult = $connection->query($insertQuery);

    if ($insertResult) {
        // Redirect ke halaman lain jika perlu
        header("Location: experience.php");
        exit();
    } else {
        echo "Error dalam menambahkan data: " . $connection->error;
    }
}

// Menutup koneksi ke database
$connection->close();
?>