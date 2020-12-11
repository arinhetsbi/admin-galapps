<?php
include '../../../koneksi.php';

$id_kota = mysqli_real_escape_string($koneksi, $_POST['id_kota']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$whatsapp = mysqli_real_escape_string($koneksi, $_POST['whatsapp']);
$bank = mysqli_real_escape_string($koneksi, $_POST['bank']);
$ac = mysqli_real_escape_string($koneksi, $_POST['ac']);

$query = "INSERT INTO agen_elpiji (id, id_kota, nama, alamat, whatsapp, bank, ac) VALUES (NULL, '$id_kota', '$nama', '$alamat', '$whatsapp', '$bank', '$ac')";
$insertData = mysqli_query($koneksi, $query);

if($insertData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=agen_elpiji");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=tambah_agen_elpiji");
}

?>