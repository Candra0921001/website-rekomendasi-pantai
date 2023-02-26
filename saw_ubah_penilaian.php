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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">UAS Sistem Informasi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
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
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <span>Multimoora</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Database :</h6>
                        <a class="collapse-item" href="alternatif.php">Alternatif</a>
                        <a class="collapse-item" href="kriteria.php">Kriteria</a>
                        <a class="collapse-item" href="bobot.php">Bobot</a>
                        <a class="collapse-item active text-info" href="penilaian.php">Penilaian</a>
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
                    <ul class="navbar-nav ml-auto">
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Candra Hafidz Ardana</span>
                                    <img class="img-profile rounded-circle" src="img/profile.jpg">
                                </a>
                            </li>

                        </ul>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->

                    <?php
                    include "koneksi.php";
                    $sql = mysqli_query($koneksi, "SELECT matrix_penilaian.*, bobot.value_bobot, alternatif.nama_alternatif, matrix_penilaian.value_penilaian from matrix_penilaian, bobot, alternatif where  bobot.id_bobot = matrix_penilaian.id_bobot and alternatif.id_alternatif = matrix_penilaian.id_alternatif and id_penilaian=$_GET[id_penilaian]");
                    $data = mysqli_fetch_array($sql);
                    ?>

                    <h1 class="h3 mb-2 text-gray-800">Form Ubah Penilaian</h1>

                    <form method="POST" action="aksi_saw_ubah.php">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">ID Penilaian</label>
                            <label class="col-form-label">:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="penilaian_saw" name="id_penilaian" value = "<?php echo $data['id_penilaian']?>" placeholder="Masukkan ID..." aria-describedby="validationServer03Feedback" readonly>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nilai Bobot (ROC)</label>
                            <label class="col-form-label">:</label>
                            <div class="col-sm-5">
                                <select class="form-control" id="exampleFormControlSelect1" name="value_bobot" readonly>
                                    <?php
                                    include 'koneksi.php';
                                    echo "<option value = $data[id_bobot]>$data[value_bobot]</option>";

                                    $sql = "SELECT * FROM bobot";
                                    $b = $koneksi->query($sql);
                                    while ($c = $b->fetch_array()) {
                                    ?>
                                        <option value=<?php echo $c['id_bobot'] ?>>
                                            <?php echo $c['value_bobot'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama Alternatif</label>
                            <label class="col-form-label">:</label>
                            <div class="col-sm-5">
                                <select class="form-control" id="exampleFormControlSelect1" name="nm_lokasi" readonly>
                                    <?php
                                    include 'koneksi.php';
                                    echo "<option value = $data[id_alternatif]>$data[nama_alternatif]</option>";

                                    $sql = "SELECT * FROM alternatif";
                                    $b = $koneksi->query($sql);
                                    while ($c = $b->fetch_array()) {
                                    ?>
                                        <option value=<?php echo $c['id_alternatif'] ?>>
                                            <?php echo $c['nama_alternatif'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Penilaian</label>
                            <label class="col-form-label">:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="bobot_saw" name="penilaian" value = "<?php echo $data['value_penilaian']?>" placeholder="Masukkan Nilai..." aria-describedby="validationServer03Feedback" required>
                            </div>
                        </div>


                        <a href="penilaian.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="submit" value="Submit" class="btn btn-success btn-pill">Submit</button>
                    </form>
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


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>