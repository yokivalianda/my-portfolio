<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pengalaman</title>
    <!-- Tambahkan link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Add this in the head section -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    textarea {
        resize: none;
        /* Menonaktifkan fitur resize */
        overflow: hidden;
        /* Menyembunyikan scroll bar jika ada */
    }
    </style>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include "sidebar.php" ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include "topbar.php" ?>

                <!-- Begin Page Content -->
                <div class="container mt-4">
                    <div class="d-flex justify-content-between">
                        <h2>Tambah Experience</h2>
                    </div>
                    <form action="proses_tambah_experience.php" method="POST">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input type="text" class="form-control" id="posisi" name="posisi" required>
                        </div>
                        <div class="form-group">
                            <label for="perusahaan">Perusahaan</label>
                            <input type="text" class="form-control" id="perusahaan" name="perusahaan" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Langkah 1: Buat koneksi ke database
                    $conn = mysqli_connect('localhost', 'root', '', 'portfolio');

                    // Periksa koneksi
                    if (!$conn) {
                        die("Koneksi gagal: " . mysqli_connect_error());
                    }

                    // Langkah 2: Ambil data dari form
                    $tanggal = $_POST['tanggal'];
                    $posisi = $_POST['posisi'];
                    $perusahaan = $_POST['perusahaan'];
                    $deskripsi = $_POST['deskripsi'];

                    // Langkah 3: Insert data ke tabel 'experience'
                    $query = "INSERT INTO experience (tanggal, posisi, perusahaan, ket) VALUES ('$tanggal', '$posisi', '$perusahaan', '$deskripsi')";

                    if (mysqli_query($conn, $query)) {
                        echo "<div class='alert alert-success mt-3'>Experience berhasil ditambahkan!</div>";
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Error: " . $query . "<br>" . mysqli_error($conn) . "</div>";
                    }

                    // Langkah 4: Tutup koneksi ke database
                    mysqli_close($conn);
                }
                ?>


                <script>
                // Function untuk mengatur tinggi textarea
                function adjustTextareaHeight(textarea) {
                    // Set tinggi textarea menjadi 0 sementara untuk menghitung konten yang sebenarnya
                    textarea.style.height = '0';
                    // Atur tinggi textarea sesuai dengan tinggi konten yang sebenarnya
                    textarea.style.height = textarea.scrollHeight + 'px';
                }

                // Panggil fungsi adjustTextareaHeight ketika halaman dimuat
                window.onload = function() {
                    // Ambil semua elemen textarea pada halaman
                    var textareas = document.getElementsByTagName('textarea');
                    // Loop melalui setiap textarea dan panggil fungsi adjustTextareaHeight
                    for (var i = 0; i < textareas.length; i++) {
                        adjustTextareaHeight(textareas[i]);
                    }
                };

                // Panggil fungsi adjustTextareaHeight ketika teks di textarea berubah
                document.addEventListener('input', function(e) {
                    if (e.target.tagName.toLowerCase() === 'textarea') {
                        adjustTextareaHeight(e.target);
                    }
                });
                </script>


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