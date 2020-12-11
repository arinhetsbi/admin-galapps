<?php
$koneksi = mysqli_connect("localhost", "root", "", "antar_galon");

$sql = $koneksi->query("select * from tb_about_us");
$tampil = $sql->fetch_assoc();

$sql2 = $koneksi->query("select * from tb_profile");
$tampil2 = $sql2->fetch_assoc();

$sql3 = $koneksi->query("select * from tb_contact_us");
$tampil3 = $sql3->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="assets/js/parallax.js"></script>

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Flexor - v2.3.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span>AntarGalon.com</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--<a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid" height="20px" width="40px"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="gasgalon.php">Galon & Gas LPG</a></li>
          <li class="active"><a href="About-us.php">About Us</a></li>
          <li><a href="kerjasama.php">Kerja Sama</a></li>
          <li><a href="FAQ.php">FAQ</a></li>
          <li><a href="contacus.php">Contact</a></li>
          <li><a href="./login.php">Admin</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Title -->
    <section id="title">
      <div class="container col-md-12 text-center" data-aos="fade-in">
        <h1>Galon & Gas LPG</h1>
        <hr>
        <h5>Tentang Kami</h5>
      </div>
    </section>

    <!-- Visi Misi -->
    <section id="visi-misi" class="visi-misi" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="info-box">
              <div class="profil" id="profil">
                <div class="logo text-center">
                  <h3>Profil Institusi</h3>
                  <i><?php echo '<img src = "data:image/jpg;base64,' . base64_encode($tampil['logo']) . '" alt="Image" style="width: 150px; height:150px;" >'; ?></i>
                  <p style="font-size: smaller;">Logo Institusi</p>
                </div>
                <p><b>Nama Institusi</b> : <?php echo $tampil2['nama']; ?></p>
                <p><b>Alamat</b> : <?php echo $tampil2['alamat']; ?></p>
                <p><b>Pimpinan</b> : <?php echo $tampil2['pimpinan']; ?></p>
                <p><b>Tanggal Berdiri</b> : <?php echo $tampil2['tanggal_berdiri']; ?></p>
                <p><b>Situs</b> : <a href="index.php"><?php echo $tampil2['situs']; ?></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6" id="visi">
                <h3>Visi</h3>
                <p>
                  <?php
                  echo $tampil['visi'];
                  ?>
                </p>
              </div>
              <div class="col-md-6">
                <h3>Misi</h3>
                <p>
                  <?php
                  echo $tampil['misi'];
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Visi Misi-->

    <!-- Sejarah -->
    <section class="sejarah" id="sejarah">
      <div class="container">
        <div class="row">
          <div data-aos="fade-up" data-aos-delay="100">
            <h3>Sejarah</h3>
            <hr>
          </div>
          <p data-aos="fade-up" data-aos-delay="150">
            <?php 
              echo $tampil['sejarah'];
            ?>
          </p>
        </div>
      </div>

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>AntarGalon.com</h3>
            <p>
              Jl. Mataram No.13 <br>
              Kec. Margadana <br>
              Kota Tegal, Jawa Tengah <br> <br>
              <strong>Phone:</strong> +62 877-8283-3608<br>
              <strong>Email:</strong> rumahduka.com@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="gasgalon.php">Galon & Gas LPG</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="kerja-sama.php">Kerja Sama</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="FAQ.php">FAQ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="mr-lg-auto text-center text-lg-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Flexor</span></strong>. All Rights Reserved
        </div>

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://wa.me/<?php echo $tampil3['wa'];?>?text=Saya%20tertarik%20mendaftarkan%20rumah%20duka%20milik%20saya"" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        <a href="mailto:rumahduka.com@gmail.com" class="Email"><i class="bx bx-envelope"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>