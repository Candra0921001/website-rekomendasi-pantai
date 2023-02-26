<?php
    include "koneksi.php";
    $nama = $_POST['namalengkap'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ulangipassword = $_POST['ulangipassword'];
    $level = $_POST['level'];
    
    if ($password == $ulangipassword) {
        $sql = "INSERT INTO `uas_praksi`.`register` (`username`, `password`, `email`,`nama`,`level`) 
                VALUES ('$username', '$password', '$email', '$nama', '$level');";
        $query = $koneksi->query($sql);
        if ($query == true) {
            echo "
                <script>
                    alert('Anda Sukses Registrasi');
                    window.location.href = ('index.php');
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Error');
                    window.location.href = ('register.php');
                </script>
            ";
        }
   }else{
        echo "
            <script>
                alert('Ulangi, Password Anda tidak sama');
                window.location.href = ('register.php');
            </script>
        ";
   }

?>