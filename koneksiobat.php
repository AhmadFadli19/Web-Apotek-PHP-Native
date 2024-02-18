<?php
$koneksiobat = new mysqli('localhost', 'root', '', 'apotek_beneran') 
or die(mysqli_error($koneksiobat));

if (isset($_POST['simpan'])) {
    $id_obat = $_POST['id_obat'];
    $jenis_obat = $_POST['jenis_obat'];
    $nama_obat = $_POST['nama_obat'];
    $merek_obat = $_POST['merek_obat'];
    $koneksiobat->query("INSERT INTO obat (id_obat, jenis_obat, nama_obat, merek_obat) values ('$id_obat',
    '$jenis_obat','$nama_obat','$merek_obat')");

    header('location:obat.php');
}

if (isset($_GET['id_obat'])) {
    $id_obat = $_GET['id_obat'];
    $koneksiobat->query("DELETE FROM obat where id_obat = '$id_obat'");
    header("location:obat.php");
}

if (isset($_POST['edit'])) {
    $id_obat = $_POST['id_obat'];
    $jenis_obat = $_POST['jenis_obat'];
    $nama_obat = $_POST['nama_obat'];
    $merek_obat = $_POST['merek_obat'];

    $koneksiobat->query("UPDATE obat SET id_obat='$id_obat', jenis_obat='$jenis_obat', nama_obat='$nama_obat', merek_obat='$merek_obat'");
    header("location:obat.php");
}

?>

