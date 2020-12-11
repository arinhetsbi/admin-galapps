<?php
include '../../../koneksi.php';

$id_provinsi = mysqli_real_escape_string($koneksi, $_POST['id_provinsi']);
$nama_kota = mysqli_real_escape_string($koneksi, $_POST['nama_kota']);
$query = "INSERT INTO kota (id, id_provinsi, nama_kota) VALUES (NULL,'$id_provinsi','$nama_kota')";
$insertData = mysqli_query($koneksi, $query);

if($insertData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=kota");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=kota");
}

?>