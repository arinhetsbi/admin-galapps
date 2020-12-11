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

  <title>Antar Galon & Gas Elpiji</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
        <!--<a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid" height="20px" width="40px"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="gasgalon.php">Galon & Gas LPG</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="kerjasama.php">Kerja Sama</a></li>
          <li><a href="FAQ.php">FAQ</a></li>
          <li><a href="contacus.php">Contact</a></li>
          <li><a href="./login.php">Admin</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container" data-aos="fade-in">
      <h1>Selamat Datang di Antar Galon & Gas LPG</h1>
      <h2>Portal Utama Antar Galon & Gas LPG</h2>
      <div class="d-flex align-items-center">
        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
        <a href="#table" class="btn-get-started scrollto">Lihat Galon & Gas LPG</a>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Apa itu AntarGalon.com?</h3>
              <p>
                Adalah portal website seluruh Indonesia dimana anda dapat menemukan produk galon dan gas lpg
                berdasarkan kota/provinsi dan mempermudah anda untuk membeli atau menjadi agen galon dan gas lpg
              </p>
              <div class="text-center">
                <a href="About-us.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Data Lengkap</h4>
                    <p>Kami menghimpun data seluruh agen Gas dan Galon yang ada di Indonesia</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Bekerja Sama Dengan Berbagai Pihak</h4>
                    <p>Kami akan membantu anda dalam bekerja sama dengan menjadi Agen Galon dan Gas LPG</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-search"></i>
                    <h4>Pencarian</h4>
                    <p>Sistem kami akan membantu anda mendapatkan informasi tentang Agen Galon dan Gas LPG</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h4 data-aos="fade-up">About us</h4>
            <h3 data-aos="fade-up">Dapatkan Informasi Kabar menarik mengenai Galon & Gas LPG</h3>
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-receipt"></i></div>
              <h4 class="title"><a href="">Data Lengkap</a></h4>
              <p class="description">Kami menghimpun data seluruh Agen Galon & Gas LPG yang ada di Indonesia</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-cube-alt"></i></div>
              <h4 class="title"><a href="">Bekerja Sama Dengan Berbagai Pihak</a></h4>
              <p class="description">Kami akan membantu anda menjadi Agen Galon & Gas</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-search"></i></div>
              <h4 class="title"><a href="">Pencarian</a></h4>
              <p class="description">Sistem kami akan membantu anda mendapatkan agen yang dekat dengan wilayah anda</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4><a href="About-us.php">Read More...</a></h4>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    <!-- ======= Partner Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item">
              <a href="https://wa.me/<?php echo $tampil3['wa'];?>"><img class="d-block w-100" src="assets\img\blog-3.png" alt="First slide"></a>
            </div>
            <div class="carousel-item">
              <a href="#table"><img class="d-block w-100" src="assets\img\blog-2.png" alt="Second slide"></a>
            </div>
            <div class="carousel-item active">
              <a href="kerja-sama.php"><img class="d-block w-100" src="assets\img\blog-1.jpeg" alt="Third slide"></a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </section><!-- End Partner Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Contact Us</h2>
          <p data-aos="fade-up">Hubungi kami untuk segala kebutuhan anda</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Alamat</h3>
              <p>Jl. Mataram No.13 Kec. Margadana, Kota Tegal, Jawa Tengah</p>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>antargalon.com@ gmail.com <br><br></p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
              <i class="bx bx-phone-call"></i>
              <h3>No. HP / WA</h3>
              <p>+62 85385774717<br>+62 85485774717 <br><br></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

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
              <strong>Email:</strong> antargalon.com@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="gasgalon.php">Antar Galon & Gas LPG</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="kerja-sama.php">Kerja Sama</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="FAQ.php">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contacus.php">Contac</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="./login.php">Admin</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="mr-lg-auto text-center text-lg-left">
        <div class="copyright">
          &copy; Copyright <strong><span>antargalon</span></strong>. All Rights Reserved
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
        <a href="https://wa.me/<?php echo $tampil3['wa'];?>" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
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
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#tabel-data').DataTable();
    });
  </script>

</body>

</html>