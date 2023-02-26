<?php
    include "koneksi.php";

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        mysqli_query($koneksi,"DELETE FROM alternatif where id_alternatif=$id");
        header("location:alternatif.php");
    }

    else if(isset($_GET['delete1'])){
        $id = $_GET['delete1'];
        mysqli_query($koneksi,"DELETE FROM kriteria where id_kriteria=$id");
        header("location:kriteria.php");
    }

    else if(isset($_GET['delete2'])){
        $id = $_GET['delete2'];
        mysqli_query($koneksi,"DELETE FROM bobot where id_bobot=$id");
        header("location:bobot.php");
    }

    else if(isset($_GET['delete3'])){
        $id = $_GET['delete3'];
        mysqli_query($koneksi,"DELETE FROM matrix_penilaian where id_penilaian=$id");
        header("location:penilaian.php");
    }
    
?>