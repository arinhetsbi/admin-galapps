<?php
include '../../../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$nama_provinsi = mysqli_real_escape_string($koneksi, $_POST['nama_provinsi']);
$query = "UPDATE provinsi SET nama_provinsi='$nama_provinsi' WHERE id='$id'";
$updateData = mysqli_query($koneksi, $query);

if($updateData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=provinsi");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=provinsi");
}

?>