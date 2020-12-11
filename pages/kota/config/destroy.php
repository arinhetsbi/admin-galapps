<?php
include '../../../koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$query = "DELETE from kota WHERE id='$id'";
$destroyData = mysqli_query($koneksi, $query);

if($destroyData){
    echo '<script>localStorage.setItem("pesan", "success")</script>';
    header("Refresh:0 ,url=../../index.php?page=kota");
}else{
    echo '<script>localStorage.setItem("pesan","warning")</script>';
    header("Refresh:0 ,url=../.. /index.php?page=kota");
}

?>