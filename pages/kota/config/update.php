<?php
include '../../../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$id_provinsi = mysqli_real_escape_string($koneksi, $_POST['id_provinsi']);
$nama_kota = mysqli_real_escape_string($koneksi, $_POST['nama_kota']);
$query = "UPDATE kota SET id_provinsi='$id_provinsi',nama_kota='$nama_kota' WHERE id='$id'";
$updateData = mysqli_query($koneksi, $query);

if($updateData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=kota");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=kota");
}

?>