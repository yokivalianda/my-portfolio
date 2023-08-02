<!DOCTYPE html>
<html>
<head>
    <title>Update Pengalaman</title>
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
    <!-- Tambahkan link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tambahkan link ke Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    textarea {
        resize: none; /* Menonaktifkan fitur resize */
        overflow: hidden; /* Menyembunyikan scroll bar jika ada */
    }
</style>


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

                  <div class="container mt-4">
        <?php
        // Langkah 1: Buat koneksi ke database
        $conn = mysqli_connect('localhost', 'root', '', 'portfolio');

        // Periksa koneksi
        if (!$conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Langkah 2: Periksa apakah ada parameter ID yang dikirimkan dari tabel sebelumnya
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Langkah 3: Ambil data pengalaman berdasarkan ID dari database
            $query = "SELECT * FROM experience WHERE id = $id";
            $result = mysqli_query($conn, $query);

            // Langkah 4: Tampilkan data dalam formulir untuk update
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                ?>
                <h2>Update Pengalaman</h2>
                <form method="post" action="proses_update.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" name="tanggal" class="form-control" value="<?php echo $row['tanggal']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Posisi</label>
                        <input type="text" name="posisi" class="form-control" value="<?php echo $row['posisi']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Perusahaan</label>
                        <input type="text" name="perusahaan" class="form-control" value="<?php echo $row['perusahaan']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" class="form-control"><?php echo $row['ket']; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <?php
            } else {
                echo '<p>Data tidak ditemukan.</p>';
            }

            // Langkah 5: Tutup koneksi ke database
            mysqli_close($conn);
        } else {
            echo '<p>Parameter ID tidak ditemukan.</p>';
        }
        ?>
    </div>

    <script>
    // Function untuk mengatur tinggi textarea
    function adjustTextareaHeight(textarea) {
        // Set tinggi textarea menjadi 0 sementara untuk menghitung konten yang sebenarnya
        textarea.style.height = '0';
        // Atur tinggi textarea sesuai dengan tinggi konten yang sebenarnya
        textarea.style.height = textarea.scrollHeight + 'px';
    }

    // Panggil fungsi adjustTextareaHeight ketika halaman dimuat
    window.onload = function () {
        // Ambil semua elemen textarea pada halaman
        var textareas = document.getElementsByTagName('textarea');
        // Loop melalui setiap textarea dan panggil fungsi adjustTextareaHeight
        for (var i = 0; i < textareas.length; i++) {
            adjustTextareaHeight(textareas[i]);
        }
    };

    // Panggil fungsi adjustTextareaHeight ketika teks di textarea berubah
    document.addEventListener('input', function (e) {
        if (e.target.tagName.toLowerCase() === 'textarea') {
            adjustTextareaHeight(e.target);
        }
    });
</script>


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

    <!-- Tambahkan link ke file JavaScript Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
