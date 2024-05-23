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
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
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
    $query = "SELECT id, posisi, perusahaan, ket, tanggal FROM experience"; // Ganti "about" dengan nama tabel Anda
    $result = $connection->query($query);

    if ($result) {
        // Pastikan hasil query valid sebelum mengakses properti num_rows
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $existingText = $row["id"];
        } else {
            $existingText = ""; // Jika data tidak ditemukan, teks akan kosong atau Anda bisa melakukan tindakan lain sesuai kebutuhan.
        }
    } else {
        // Jika eksekusi query gagal, tampilkan pesan error
        echo "Error dalam eksekusi query: " . $connection->error;
    }
    // buat query untuk ambil data dari database
    $query = mysqli_query($connection, "SELECT * FROM experience");
    $d = mysqli_fetch_assoc($query);

    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include "sidebar.php" ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include "topbar.php"; ?>


                <!-- Begin Page Content -->
                <div class="container mt-4">
                    <div class="d-flex justify-content-between">
                        <h2>Tabel Experience</h2>
                        <a href="add_experience.php" class="btn btn-success">Add Experience</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Posisi</th>
                                <th>Perusahaan</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Langkah 1: Buat koneksi ke database
                            $conn = mysqli_connect('localhost', 'root', '', 'portfolio');

                            // Periksa koneksi
                            if (!$conn) {
                                die("Koneksi gagal: " . mysqli_connect_error());
                            }

                            // Langkah 2: Ambil data dari tabel 'experience' dalam database
                            $query = "SELECT * FROM experience order by urutan asc";
                            $result = mysqli_query($conn, $query);

                            // Langkah 3: Tampilkan data dalam tabel
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td>' . $no . '</td>';
                                echo '<td>' . $row['tanggal'] . '</td>';
                                echo '<td>' . $row['posisi'] . '</td>';
                                echo '<td>' . $row['perusahaan'] . '</td>';
                                echo '<td>' . $row['ket'] . '</td>';
                                // Tambahkan tombol update dengan mengirimkan ID record sebagai parameter
                                echo '<td><a href="update_experience.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Update</a></td>';
                                $no++;
                            }

                            // Langkah 4: Tutup koneksi ke database
                            mysqli_close($conn);
                            ?>
                        </tbody>
                    </table>
                </div>



                <!-- Tambahkan link JS Bootstrap (Jika diperlukan) -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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