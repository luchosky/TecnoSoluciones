<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo COMPANY; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <?php echo include "vistas/inc/header.php"?>
</header><!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <?php echo include "vistas/inc/hero.php"?>
</section>
<!-- End Hero -->
<main id="main">
<!-- ======= seccion clientes ======= -->
<section id="cliens" class="cliens section-bg">
  <div class="container">
    <div class="row aos-init aos-animate" data-aos="zoom-in">
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-8.png" class="img-fluid" alt="" href="http://libreriasantodomingo.cl/">
      </div>
    </div>
  </div>
</section>
<!-- seccion clientes -->
<!-- =======  seccion quienes somos ======= -->
<section id="about" class="about">
  <?php echo include "vistas/inc/quienesomos.php"?>
</section><!-- fin seccion quienes somos-->
    <!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us section-bg">
  <?php echo include "vistas/inc/caracterizamos.php" ?>
</section><!-- End Why Us Section -->
    <!-- ======= Skills Section ======= -->
<section id="skills" class="skills">
  <?php echo include "vistas/inc/trabajos.php" ?>
</section><!-- End Skills Section -->
    <!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <?php echo include "vistas/inc/servicios.php" ?>
</section><!-- End Services Section -->
<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <?php echo include "vistas/inc/cotice.php" ?>
</section><!-- End Cta Section -->
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <?php echo include "vistas/inc/portafolio.php" ?>
</section><!-- End Portfolio Section -->
    <!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <?php echo include "vistas/inc/equipo.php" ?>
</section><!-- End Team Section -->
    <!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <?php echo include "vistas/inc/planes.php" ?>
</section><!-- End Pricing Section -->
    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <?php echo include "vistas/inc/contacto.php" ?>
</section><!-- End Contact Section -->
  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
<footer id="footer">
    <?php echo include "vistas/inc/footer.php" ?>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>