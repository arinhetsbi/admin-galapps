<?php
session_start();

include './koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' OR email='$username' AND password='$password'");
$admin = mysqli_fetch_array($data);
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $admin['username'];
    $_SESSION['email'] = $admin['email'];
    $_SESSION['nama'] = $admin['nama'];
    $_SESSION['status'] = 'login';
    header("location:pages/index.php");
}else{
    header("location:login.php?pesan=gagal");
}

?>