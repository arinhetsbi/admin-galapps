<?php
include '../../../koneksi.php';

$id_agen = mysqli_real_escape_string($koneksi, $_POST['id_agen']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
$query = "INSERT INTO produk_elpiji (id, id_agen, nama, harga) VALUES (NULL,'$id_agen','$nama','$harga')";
$insertData = mysqli_query($koneksi, $query);

if($insertData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=produk_elpiji");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=tambah_produk_elpiji");
}

?>