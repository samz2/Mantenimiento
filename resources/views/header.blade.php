<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IEP SOLLERTIA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link rel="stylesheet" rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
  <link href="favicon.ico" rel="icon">
  {{-- <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets1/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets1/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets1/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.2.0
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    @media screen and (max-width: 980px) {
        #dispositivo {
        display: none;
        }
    }
</style>
<body>

  <!-- ======= Top Bar ======= -->
  <!--<section id="topbar" >
    <div class="container clearfix">
      <div class="container">
        <div class="logo float-left">
          <h1 class="text-light"><a href="index.html"><span>Colegio</span><img src="assets/img/logo.png" alt=""><span>Sollertia</span></a></h1>
        </div>
      </div>
     
    </div>
  </section>-->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">

        <h1 class="text-light"><a href="/"><span id="dispositivo">Colegio</span><img src="assets1/img/logo.png" alt=""><span id="dispositivo">Sollertia</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
         
          {{-- <li class="active"><a href="/">Inicio</a></li> --}}
          <li><a href="#about">¿Quienes somos?</a></li>
           <li class="drop-down"><a href="">Vida escolar</a>
            <ul>
              <li><a href="ciencia">Ciencia y tecnologia</a></li>
              <li><a href="arte">Arte y cultura</a></li>
              <li><a href="deporte">Deportes</a></li>
            </ul>
          <li><a href="uniforme">Uniforme</a></li>
          <li class="drop-down"><a href="">Logros</a>
            <ul>
              <li><a href="logrosN">Nacionales</a></li>
              <li><a href="logrosR">Regionales</a></li>
            </ul>
          </li> 
          <li><a href="#contact">Contáctenos </a></li>
          <li><a href="login">Intranet </a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  @yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6 footer-info">
            <h3>IEP Sollertia</h3>
            <p>
              Jr. Pastaza N° 116<br>
              Pucallpa - Peru<br><br>
              <strong>Telefono:</strong>(061) 570388 <br>
              <strong>Email:</strong> informes@sollertia.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/ColegioSollertia" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="https://www.youtube.com/channel/UCwFvavQ06QpcNE0VVWgFcAQ" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>Nuestros enlaces</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Quienes Somos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Vida escolar</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Uniforme</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Logros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contáctenos </a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Nuestros Valores</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Respeto</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Liderazgo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Altruismo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Generosidad</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Disciplina</a></li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2020 Desarrollado para <strong><span>IEP SOLLERTIA</span></strong>
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/jquery/jquery.min.js"></script>
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>
  <script src="assets1/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets1/vendor/venobox/venobox.min.js"></script>
  <script src="assets1/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets1/vendor/counterup/counterup.min.js"></script>
  <script src="assets1/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>

</html>