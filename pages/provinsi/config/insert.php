<?php
include '../../../koneksi.php';

$nama_provinsi = mysqli_real_escape_string($koneksi, $_POST['nama_provinsi']);
$query = "INSERT INTO provinsi (id, nama_provinsi) VALUES (NULL,'$nama_provinsi')";
$insertData = mysqli_query($koneksi, $query);

if($insertData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=provinsi");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=provinsi");
}

?>