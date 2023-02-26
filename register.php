<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body background="img/back.jpg">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-8 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru !</h1>
                            </div>
                            <form action="aksi_register.php" method="post" class="user">
                                <div class="form-group">
                                    <label>Nama Lengkap : </label>
                                    <input type="text" class="form-control" id="exampleFirstName" name="namalengkap" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label>Email : </label>
                                    <input type="email" class="form-control" id="exampleInputEmail" name="email" placeholder="Alamat email">
                                </div>
                                <div class="form-group">
                                    <label>Username : </label>
                                    <input type="text" class="form-control" id="exampleInputEmail" name="username" placeholder="Username">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Password : </label>
                                        <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Ulangi Password : </label>
                                        <input type="password" class="form-control" name="ulangipassword" id="exampleRepeatPassword" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label>Level : </label>
                                        <div class="row mb-3">
                                            <div class="col-sm-5">
                                                <select class="form-control" id="exampleFormControlSelect1" name="level">
                                                    <option value="Admin">Admin</option>
                                                    <option value="Pengguna">Pengguna</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="index.php">Sudah Punya Akun? Login!</a>
                            </div>
                        </div>
                    </div>
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