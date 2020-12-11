<?php
include '../../../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$id_kota = mysqli_real_escape_string($koneksi, $_POST['id_kota']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$whatsapp = mysqli_real_escape_string($koneksi, $_POST['whatsapp']);
$bank = mysqli_real_escape_string($koneksi, $_POST['bank']);
$ac = mysqli_real_escape_string($koneksi, $_POST['ac']);
$query = "UPDATE agen_galon SET nama='$nama', alamat='$alamat', whatsapp='$whatsapp', bank='$bank', ac='$ac' WHERE id='$id'";
$updateData = mysqli_query($koneksi, $query);

if($updateData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=agen_galon");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../../index.php?page=edit_agen_galon&&id='$id'");
}
?>