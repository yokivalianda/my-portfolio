<!-- process_edit_experience.php -->
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

// Menyimpan data yang diedit ke dalam database jika formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $tanggal = $_POST["tanggal"];
    $posisi = $_POST["posisi"];
    $perusahaan = $_POST["perusahaan"];
    $ket = $_POST["ket"];

    // Update data di tabel dengan teks yang diedit
    $updateQuery = "UPDATE experience SET tanggal = '$tanggal', posisi = '$posisi', perusahaan = '$perusahaan', ket = '$ket' WHERE id = $id";
    $updateResult = $connection->query($updateQuery);

    if ($updateResult) {
        // Redirect ke halaman lain jika perlu
        header("Location: edit_pengalaman.php");
        exit();
    } else {
        echo "Error dalam memperbarui data: " . $connection->error;
    }
}
?>
