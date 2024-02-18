<?php
$koneksipegawai = new mysqli('localhost', 'root', '', 'apotek_beneran') 
or die(mysqli_error($koneksipegawai));

if (isset($_POST['simpan'])) {
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat_pegawai = $_POST['alamat_pegawai'];
    $telepon_pegawai = $_POST['telepon_pegawai'];
    $koneksipegawai->query("INSERT INTO pegawai (id_pegawai, nama_pegawai, alamat_pegawai, telepon_pegawai) values ('$id_pegawai',
    '$nama_pegawai','$alamat_pegawai','$telepon_pegawai')");
    header('location:pegawai.php');
}

if (isset($_GET['id_pegawai'])) {
    $id_pegawai = $_GET['id_pegawai'];
    $koneksipegawai->query("DELETE FROM pegawai where id_pegawai = '$id_pegawai'");
    header("location:pegawai.php");
}

if (isset($_POST['edit'])) {
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat_pegawai = $_POST['alamat_pegawai'];
    $telepon_pegawai = $_POST['telepon_pegawai'];

    $koneksipegawai->query("UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai', alamat_pegawai='$alamat_pegawai', telepon_pegawai='$telepon_pegawai'");
    header("location:pegawai.php");
}



