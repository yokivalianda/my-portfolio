<?php
// Langkah 1: Buat koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'portfolio');

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Langkah 2: Periksa apakah data dikirimkan dari formulir
if (isset($_POST['id']) && isset($_POST['tanggal']) && isset($_POST['posisi']) && isset($_POST['perusahaan']) && isset($_POST['deskripsi'])) {
    // Langkah 3: Tangkap data dari formulir
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $posisi = $_POST['posisi'];
    $perusahaan = $_POST['perusahaan'];
    $deskripsi = $_POST['deskripsi'];

    // Langkah 4: Lakukan validasi data jika diperlukan (optional)
    // ...

    // Langkah 5: Update data ke dalam database
    $query = "UPDATE experience SET tanggal = '$tanggal', posisi = '$posisi', perusahaan = '$perusahaan', ket = '$deskripsi' WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        // Jika update berhasil, kembalikan ke halaman utama atau halaman yang diinginkan
        header('Location: experience.php');
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Data tidak lengkap. Harap isi semua bidang.";
}

// Langkah 6: Tutup koneksi ke database
mysqli_close($conn);