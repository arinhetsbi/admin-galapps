<!DOCTYPE html>
<html>
<head>
  <?php

include './partials/head.php'

  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<?php 

include './partials/navbar.php';
include './partials/sidebar.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php 
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page) {
            case 'dashboard':
                include './dashboard/index.php';
                break;
            case 'provinsi':
                include './provinsi/index.php';
                break;
            case 'kota':
                include './kota/index.php';
                break;
            case 'agen_galon':
                include './agen_galon/index.php';
                break;
            case 'tambah_agen_galon':
                include './agen_galon/create.php';
                break;
            case 'edit_agen_galon':
                include './agen_galon/edit.php';
                break;
            case 'agen_elpiji':
                include './agen_elpiji/index.php';
                break;
            case 'tambah_agen_elpiji':
                include './agen_elpiji/create.php';
                break;
            case 'edit_agen_elpiji':
                include './agen_elpiji/edit.php';
                break;
            case 'produk_galon':
                include './produk_galon/index.php';
                break;
            case 'tambah_produk_galon':
                include './produk_galon/create.php';
                break;
            case 'edit_produk_galon':
                include './produk_galon/edit.php';
                break;
            case 'produk_elpiji':
                include './produk_elpiji/index.php';
                break;
            case 'tambah_produk_elpiji':
                include './produk_elpiji/create.php';
                break;
            case 'edit_produk_elpiji':
                include './produk_elpiji/edit.php';
                break;
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }else{
        include './dashboard/index.php';
    }
    
    ?>
  </div>
  <!-- /.content-wrapper -->
  <?php
    include './partials/footer.php';
  ?>

  
</div>
<!-- ./wrapper -->

<?php include './partials/script.php' ?>
</body>
</html>
