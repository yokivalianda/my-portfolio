<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Portfolio Yoki Valianda" name="keywords">
    <meta content="Portfolio Yoki Valianda" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

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

    // Mendapatkan data "About Me" dari database
    $query_about = "SELECT isi_about FROM about"; // Ganti "nama_tabel" dengan nama tabel yang sesuai
    $result_about = $connection->query($query_about);

    if ($result_about && $result_about->num_rows > 0) {
        $row_about = $result_about->fetch_assoc();
        $about_me = $row_about["isi_about"];
    } else {
        $about_me = "Data About Me tidak ditemukan.";
    }
    ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">

    <!-- Nav Bar Lama Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">MY PORTFOLIO</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="#home" class="nav-item nav-link active">HOME</a>
                    <a href="#about" class="nav-item nav-link">ABOUT</a>
                    <a href="#service" class="nav-item nav-link">SERVICE</a>
                    <a href="#experience" class="nav-item nav-link">EXPERIENCE</a>
                    <a href="#portfolio" class="nav-item nav-link">PORTFOLIO</a>
                    <a href="#socialmedia" class="nav-item nav-link">SOCIAL MEDIA</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar Lama End -->


    <!-- Hero Start -->
    <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <p>I'm</p>
                            <h1>Yoki Valianda</h1>
                            <h2></h2>
                            <div class="typed-text">IT Support, Freelancer, Fresh Graduate</div>
                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="resume/Curriculum Vitae (V3) - Yoki Valianda.pdf">Download CV</a>
                            <a class="btn" href="Https://Wa.me/6283151395847">Contact Me</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="img/foto.png" alt="Foto" class="rounded-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="img/about.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-header text-left">
                            <p style="background-color: #f5f5f5;">About Me</p>
                        </div>
                        <div class="about-text">
                            <p class="lead">
                                <?php echo $about_me; ?>
                            </p>
                        </div>
                        <div class="section-header text-left">
                            <p style="background-color: #f5f5f5;">Skills</p>
                        </div>
                        <ul class="lead">
                            <li>Operating Computers</li>
                            <li>IT Support Spesialist</li>
                            <li>10-finger Typing Speed</li>
                            <li>Microsoft Word</li>
                            <li>Microsoft Excel</li>
                            <li>Microsoft Powerpoint</li>
                            <li>Computers Networking</li>
                        </ul>
                        <!-- <a class="btn" href="">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service" id="service">
        <div class="container">
            <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p style="background-color: #f5f5f5;">What I do</p>
                <h2>QUALITY SERVICES</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="service-text">
                            <h3>Installation Operating System</h3>
                            <p>
                                Saya bertanggung jawab melakukan instalasi sistem operasi komputer, termasuk persiapan
                                media instalasi, pengaturan partisi, dan konfigurasi awal.
                                Saya memastikan proses instalasi berjalan lancar dan sistem operasi berfungsi dengan
                                baik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-laptop-code"></i>
                        </div>
                        <div class="service-text">
                            <h3>Maintenance PC</h3>
                            <p>
                                Seringkali, saya terlibat dalam melakukan analisis dan penyelesaian masalah komputer
                                ketika menghadapi kendala,
                                dengan tekad kuat untuk mengembalikannya ke kondisi semula yang optimal agar komputer
                                bisa digunakan kembali.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="service-text">
                                <h3>Apps Design</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div> -->
                <!-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="service-text">
                                <h3>Apps Development</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phase nec preti mi. Curabi facilis ornare velit non
                                </p>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Experience Start -->
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <p style="background-color: #f5f5f5;">My Resume</p>
                <h2>EXPERIENCE</h2>
            </header>
            <div class="timeline">
                <div class="container">
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

                    // Langkah 3: Tampilkan data dalam loop
                    $isRight = true; // Flag untuk menentukan posisi item di timeline
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="timeline-item <?php echo ($isRight) ? 'right' : 'left'; ?> wow slideIn<?php echo ($isRight) ? 'Right' : 'Left'; ?>"
                        data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date"><?php echo $row['tanggal']; ?></div>
                            <h2><?php echo $row['posisi']; ?></h2>
                            <h4><?php echo $row['perusahaan']; ?></h4>
                            <p>
                                <?php echo $row['ket']; ?>
                            </p>
                        </div>
                    </div>
                    <?php
                        // Toggle flag untuk mengubah posisi item di timeline
                        $isRight = !$isRight;
                    }

                    // Langkah 4: Tutup koneksi ke database
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Experience End -->

    <!-- Pendidikan Start -->
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <h2>EDUCATION</h2>
            </header>
            <div class="timeline">
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">Oktober 2018 - Agustus 2022</div>
                        <h2>Sarjana Komputer</h2>
                        <h4>S1 Informatika, Institut Teknologi dan Bisnis PalComTech, Palembang</h4>
                        <p>
                            Dengan kegigihan dan dedikasi yang tak kenal lelah, saya berhasil meraih IPK 3.71 yang
                            membanggakan disertai pujian selama perjalanan kuliah saya.
                        </p>
                    </div>
                </div>
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">Maret 2021 - April 2021</div>
                        <h2>Teknik Komputer dan Jaringan </h2>
                        <h4>SMK Utama Bakti Palembang, Palembang</h4>
                        <p>
                            Dengan pemahaman yang kuat tentang hardware dan software dalam ilmu komputer,
                            serta pemahaman dasar tentang jaringan komputer LAN/WAN,
                            saya memiliki keterampilan yang mumpuni dalam merakit PC dan menyelesaikan berbagai masalah
                            terkait hardware dan software.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pendidikan End -->


    <!-- Organisasi Start -->
    <div class="experience" id="experience">
        <div class="container">
            <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <h2>ORGANIZATION EXPERIENCE</h2>
            </header>
            <div class="timeline">
                <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">Oktober 2019 - September 2020</div>
                        <h2>Ketua</h2>
                        <h4>Organisasi UKM PalComTech Programming, Palembang</h4>
                        <p>
                            • Mengkoordinasikan kegiatan belajar. <br>
                            • Melakukan dokumentasi pembelajaran. <br>
                            • Membuat laporan bulanan pembelajaran.
                        </p>
                    </div>
                </div>
                <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">September 2020 - September 2020</div>
                        <h2>Sukarelawan</h2>
                        <h4>Institut Teknologi dan Bisnis PalComTech, Palembang</h4>
                        <p>
                            Memimpin dan mengkoordinasikan anggota kelompok dalam acara kegiatan Pengenalan Kehidupan
                            Kampus Mahasiswa Baru (PKKMB).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Organisasi End -->



    <!--/ Section Portfolio Star /-->
    <section class="portfolio-mf sect-pt4 route" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Portfolio
                        </h3>
                        <p class="subtitle-a">
                            Berikut adalah kumpulan karya-karya saya beserta koleksi sertifikat yang saya peroleh.
                        </p>
                        <div class="line-mf"></div> <br>
                        <div class="filter-btn-group text-center">
                            <button class="btn btn-primary filter-btn" data-filter="all">All</button>
                            <button class="btn btn-primary filter-btn" data-filter="certificate">Certificate</button>
                            <button class="btn btn-primary filter-btn" data-filter="web-dev">Web Development</button>
                            <button class="btn btn-primary filter-btn" data-filter="result-test">Result Typing</button>
                            <!-- Tambahkan tombol filter lainnya sesuai kebutuhan -->
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/IT Support Google_Yoki Valianda_1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/IT Support Google_Yoki Valianda_1.png" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">IT Support Google</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">01
                                                Agustus 2023</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/Sistem Operasi.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/Sistem Operasi.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Sistem Operasi</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">07
                                                Juli 2023</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/Seluk beluk jaringan komputer.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/Seluk beluk jaringan komputer.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Jaringan Komputer</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">23
                                                Juni 2023</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box web-dev">
                        <a href="img/SS Menu Dashboard V2.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/SS Menu Dashboard V2.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Dashboard Admin Wedding Decoration</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Development</span> / <span class="w-date">28
                                                November 2022</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box web-dev">
                        <a href="img/dashboard admin.jpeg" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/dashboard admin.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Dashboard SPK</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Development</span> / <span class="w-date">02
                                                Agustus 2023</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box web-dev">
                        <a href="img/login.jpeg" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/login.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Form Login SPK</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Development</span> / <span class="w-date">02
                                                Agustus 2023</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box result-test">
                        <a href="img/typingtest.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/typingtest.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Typing Test in 10FastFinger</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">28
                                                November 2022</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box result-test">
                        <a href="img/monkeytype.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/monkeytype.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Typing Test in MonkeyType</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">02 Juni
                                                2022</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box result-test">
                        <a href="img/mybestwpm.jpg" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/mybestwpm.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Best Record Typing in MonkeyType</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep.
                                                2017</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/jaringanpng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/jaringanpng_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Network Admin & IT Support</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">06
                                                November 2022</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/teknisipng_Page2.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/teknisipng_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Teknisi Komputer</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">02
                                                November 2022</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/mswordpng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/mswordpng_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Mini Course Microsoft Word</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">14
                                                November 2022</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/beginnerpng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/beginnerpng_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Beginner Typing Test</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">01
                                                Februari 2020</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/intermediatepng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/intermediatepng_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Intermediate Typing Test</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">20 April
                                                2020</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/advanced.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/advanced.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Advanced Typing Test</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">03
                                                November 2021</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/hack4idpng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/hack4idpng_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Workshop Hack4ID</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">20 Mei
                                                2023</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/minicoursepng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/minicoursepng_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Mini Course Digital Marketing</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">31 Maret
                                                2023</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/webinar_kitalulus_freelancerpng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/webinar_kitalulus_freelancerpng_Page1.png" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Webinar Freelancer</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">27 Mei
                                                2023</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/dicodingpng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/dicodingpng_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Programming Logic</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">21
                                                Februari 2021</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/dicoding2png_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/dicoding2png_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Webinar Dicoding UX Design</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">03
                                                November 2021</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/dicoding3png_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/dicoding3png_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Webinar Dicoding Produk Digital</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">30 Oktober
                                                2021</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/gapuradigitalpng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/gapuradigitalpng_Page2.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Pelatihan Gapura Digital</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">26 Januari
                                                2020</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box certificate">
                        <a href="img/sertifikat/preinexuspng_Page1.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/sertifikat/preinexuspng_Page1.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">HTML5 for Web Development</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Certificate</span> / <span class="w-date">17 Januari
                                                2022</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box web-dev">
                        <a href="img/Halaman Utama V2.png" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="img/Halaman Utama V2.png" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Landing Page Wedding Decoration</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Development</span> / <span class="w-date">28
                                                November 2022</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Portfolio End /-->


    <!-- Footer Start -->
    <div class="footer wow fadeIn" data-wow-delay="0.6s">
        <div class="container-fluid" id="socialmedia">
            <div class="container">
                <div class="footer-info">
                    <h2>My Address</h2>
                    <h3>Wilayah Ilir Barat 1, Kota Palembang, Indonesia</h3>
                    <div class="footer-menu">
                        <p>Social Media</p>
                    </div>
                    <div class="footer-social">
                        <a href="https://web.facebook.com/yokivalianda/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/yoki_vld77/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/yoki-valianda/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="mailto:yokivalianda14@gmail.com"><i class="fab fa-google"></i></a>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Copyright 2023</a>, All Right Reserved | Designed By <a href="#">Yoki Valianda</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to top button -->
    <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Tampilkan semua item portofolio saat halaman dimuat
        $(".work-box").show();

        // Tangkap klik pada tombol filter
        $(".filter-btn").on("click", function() {
            // Dapatkan nilai filter dari tombol yang diklik
            var filterValue = $(this).attr("data-filter");

            // Sembunyikan semua item portofolio
            $(".work-box").hide();

            // Tampilkan item portofolio yang sesuai dengan filter
            if (filterValue === "all") {
                $(".work-box").show();
            } else {
                $('.' + filterValue).show();
            }
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $(".work-box").show();

        $(".filter-btn").on("click", function() {
            var filterValue = $(this).attr("data-filter");

            $(".work-box").hide(0, function() {
                if (filterValue === "all") {
                    $(".work-box").show(400);
                } else {
                    $(".work-box").filter("." + filterValue).show(400);
                }
            });
        });
    });
    </script>

</body>

</html>