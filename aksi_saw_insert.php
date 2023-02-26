<?php
include "koneksi.php";

if (isset($_POST['id_alt'])) {
    $nama = $_POST['nm_lokasi'];
    $kode = $_POST['id_alt'];

    $sql = "INSERT INTO alternatif values ('" . $kode . "','" . $nama . "')";
    $a = $koneksi->query($sql);

    if ($a == true) {
        header("location:alternatif.php");
    } else {
        echo "error";
    }
    
} else if (isset($_POST['id_kriteria'])) {
    $nama = $_POST['nm_kriteria'];
    $kode = $_POST['id_kriteria'];

    $sql = "INSERT INTO kriteria values ('" . $kode . "','" . $nama . "')";
    $a = $koneksi->query($sql);

    if ($a == true) {
        header("location:kriteria.php");
    } else {
        echo "error";
    }

} else if (isset($_POST['id_bobot'])) {
    $kode = $_POST['id_bobot'];
    $bobot = $_POST['value_bobot'];
    $kriteria = $_POST['nm_kriteria'];

    $sql = "INSERT INTO bobot (id_bobot,id_kriteria,value_bobot) values ('$kode','$kriteria','$bobot')";
    $a = $koneksi->query($sql);

    if ($a == true) {
        header("location:bobot.php");
    } else {
        echo "error";
    }

} else if (isset($_POST['id_penilaian'])) {
    $kode = $_POST['id_penilaian'];
    $bobot = $_POST['value_bobot'];
    $alternatif = $_POST['nm_lokasi'];
    $penilaian = $_POST['penilaian'];

    $sql = "INSERT INTO matrix_penilaian (id_penilaian,id_bobot,id_alternatif,value_penilaian) values ('$kode','$bobot','$alternatif','$penilaian')";
    $a = $koneksi->query($sql);

    if ($a == true) {
        header("location:penilaian.php");
    } else {
        echo "error";
    }
}
