<?php
include '../../../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$id_agen = mysqli_real_escape_string($koneksi, $_POST['id_agen']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
$query = "UPDATE produk_elpiji SET id_agen='$id_agen', nama='$nama', harga='$harga' WHERE id='$id'";
$updateData = mysqli_query($koneksi, $query);

if($updateData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=produk_elpiji");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=edit_produk_elpiji&&id='$id'");
}

?>