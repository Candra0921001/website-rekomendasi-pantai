<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Praktikum Sistem Informasi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">UAS Sistem Informasi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard2.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Metode
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>Multimoora</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">View Database :</h6>
                        <a class="collapse-item" href="matrix_keputusan.php">Matrix Keputusan</a>
                        <a class="collapse-item" href="normalisasi.php">Normalisasi</a>
                        <a class="collapse-item" href="normalisasi_bobot.php">Normalisasi Bobot<br>(Ratio System)</a>
                        <a class="collapse-item" href="ranking.php">Ranking</a>
                        <a class="collapse-item" href="urutan_pantai.php">Urutan Pantai Terbaik</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <?php
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "select * from register");
                    $data = mysqli_fetch_array($sql);
                    ?>

                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang Pengguna</span>
                                <img class="img-profile rounded-circle" src="img/acidd.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">


                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-4">
                                    <center>
                                        <h6 class="m-0 h3 mb-2 font-weight-bold text-info">Metode Multimoora</h6>
                                    </center>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Multi-Objective Optimization on the basis of Ratio Analysis (MOORA) adalah multiobjektif
                                        sistem mengoptimalkan dua atau lebih attribut yang saling bertentangan secara bersamaan.
                                        Metode ini diterapkan untuk memecahkan masalah dengan perhitungan matematika yang
                                        kompleks. Moora diperkenalkan oleh Brauers dan Zavadskas pada tahun 2006. Pada awalnya
                                        metode ini diperkenalkan oleh Brauers pada tahun 2004 sebagai “Multi-Objective
                                        Optimization” yang dapat digunakan untuk memecahkan berbagai masalah pengambilan
                                        keputusan yang rumit pada lingkungan pabrik.
                                        Metode moora diterapkan untuk memecahkan banyak permasalahan ekonomi, manajerial dan
                                        konstruksi pada sebuah perusahaan maupun proyek.
                                    </p>

                                    <p>Keunggulan MOORA sendiri telah diamati bahwa metode moora sangat sederhana, stabil, dan
                                        kuat, bahkan metode ini tidak membutuhkan seorang ahli di bidang matematika untuk
                                        menggunakan nya serta membutuhkan perhitungan matematis yang sederhana. Selain itu juga
                                        metode ini juga memiliki hasil yang lebih akurat dan tepat sasaran dalam membantu
                                        pengambilan keputusan. Bila dibandingkan dengan metode yang lain metode moora bahkan
                                        lebih sederhana dan mudah diimplementasikan.
                                    </p>

                                    <p>Langkah Penyelesaian Metode Multimoora
                                        <br>
                                        1. Menentukan Kriteria dan Alternatif
                                        <br>
                                        2. Membuat Matriks Keputusan MOORA
                                        <br>
                                        3. Membuat Matrix Normalisasi
                                        <br>
                                        4. Membuat Matriks Normalisasi Bobotatau Ratio System
                                        <br>
                                        5. Membuat Ranking
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include "bar/copyright.php"
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Untuk Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih Logout Untuk Mengakhiri Sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
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

</body>

</html>