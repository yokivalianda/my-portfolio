<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
         <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Add this in the head section -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

// Mendapatkan data dari database
$query = "SELECT isi_about FROM about"; // Ganti "about" dengan nama tabel Anda
$result = $connection->query($query);

if ($result) {
    // Pastikan hasil query valid sebelum mengakses properti num_rows
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $existingText = $row["isi_about"];
    } else {
        $existingText = ""; // Jika data tidak ditemukan, teks akan kosong atau Anda bisa melakukan tindakan lain sesuai kebutuhan.
    }
} else {
    // Jika eksekusi query gagal, tampilkan pesan error
    echo "Error dalam eksekusi query: " . $connection->error;
}
    // buat query untuk ambil data dari database
$query= mysqli_query($connection, "SELECT * FROM about");
$d = mysqli_fetch_assoc($query);

// Menyimpan data yang diedit ke dalam database jika formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $editedText = $_POST["edited_text"];

    // Update data di tabel dengan teks yang diedit
    $updateQuery = "UPDATE about SET isi_about = '$editedText' "; // Ganti "nama_tabel" dengan nama tabel Anda dan sesuaikan kolomnya
    $updateResult = $connection->query($updateQuery);

    if ($updateResult) {
        // Redirect ke halaman lain jika perlu
         header("Location: about.php");
        // exit();
    } else {
        echo "Error dalam memperbarui data: " . $connection->error;
    }
}
?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       <?php include "sidebar.php"?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                  <?php include "topbar.php" ?>

                
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="container mt-5">
        <h2>Edit About Me</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <textarea class="form-control" name="edited_text" rows="10" cols="50"><?php echo $d['isi_about']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#saveChangesModal">Simpan Perubahan</button>
        </form>
    </div>

    <!-- Save Changes Modal -->
    <div class="modal fade" id="saveChangesModal" tabindex="-1" role="dialog" aria-labelledby="saveChangesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="saveChangesModalLabel">Perubahan berhasil disimpan!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- You can add more content here if needed -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->

    
     <!-- Tambahkan script dan link ke Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- End Page Content -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Add this script at the end of the body section -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>