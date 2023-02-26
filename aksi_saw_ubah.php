<?php
include "koneksi.php";

if (isset($_POST['id_alt'])) {
    $kode = $_POST['id_alt'];
    $nama = $_POST['nm_alternatif'];

    $sql = "UPDATE alternatif set nama_alternatif = '$nama' where id_alternatif = '$kode'";
    $a=$koneksi->query($sql);

    if ($a == true) {
        header("location:alternatif.php");
    }else {
        echo "error";
    }

} else if (isset($_POST['id_kriteria'])) {
    $kode = $_POST['id_kriteria'];
    $nama = $_POST['nm_kriteria'];

    $sql = "UPDATE kriteria set nama_kriteria = '$nama' where id_kriteria = '$kode'";
    $a=$koneksi->query($sql);

    if ($a == true) {
        header("location:kriteria.php");
    }else {
        echo "error";
    }

} else if (isset($_POST['id_bobot'])) {
    $kode = $_POST['id_bobot'];
    $kriteria = $_POST['nm_kriteria'];
    $bobot = $_POST['value_bobot'];

    $sql = "UPDATE bobot set id_kriteria='$kriteria', value_bobot='$bobot' where id_bobot=$kode";
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

    $sql = "UPDATE matrix_penilaian set id_bobot='$bobot', id_alternatif='$alternatif', value_penilaian='$penilaian' where id_penilaian=$kode";
    $a = $koneksi->query($sql);

    if ($a == true) {
        header("location:penilaian.php");
    } else {
        echo "error";
    }
}
