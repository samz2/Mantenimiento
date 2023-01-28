@extends('header')

@section('content')
    
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets1/img/slide/slide-1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Bienvenido a la Institución Educativa Privada SOLLERTIA</span></h2>
                <p class="animate__animated animate__fadeInUp">La Institución  Educativa Privada SOLLERTIA, brinda una formación integral con una base solida preparación académica de calidad humana que permite que a los jóvenes ser lideres en su familia, en la sociedad y así puedan contribuir significativamente al desarrollo de nuestra Región y nuestro País.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ver mas</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets1/img/slide/slide-2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Institución Educativa Privada SOLLERTIA</h2>
                <p class="animate__animated animate__fadeInUp">"Educacion para la vida..."</p>
               
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets1/img/slide/slide-3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Institución Educativa Privada SOLLERTIA</h2>
                <p class="animate__animated animate__fadeInUp">"Formando jovenes lideres en su familia y para la sociedad."</p>
              <!--  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>-->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="assets1/img/about.png" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=eO4mh6naNk4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>Bienvenido a la <span> Institución Educativa Privada SOLLERTIA</h2>
              <p>La Institución  Educativa Privada SOLLERTIA, brinda una formación integral con una base solida preparación académica de calidad humana que permite que a los jóvenes ser lideres en su familia, en la sociedad y así puedan contribuir significativamente al desarrollo de nuestra Región y nuestro País.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Educacion:</a></h4>
              <p class="description">Nivel primaria.<br>
                  Nivel secundaria.<br>
                  
              </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Ofrecemos:</a></h4>
              <p class="description">Disciplina y exigencia académica.<br>
                  Clases vivenciales y virtuales.<br>
                  Salidas a campo.<br>
                  Prácticas de laboratorio.<br>
                  Proyectos de ciencia y emprendimiento.<br>
                  Proyección y extensión social.<br>
                  Consejería psicológica.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  ">
        <div class="modal-content moda_a" align = "middle">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ubícanos en:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
           <div align="center"><iframe style="padding: 1%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1973.6190752314915!2d-74.53779263925907!3d-8.37822005665728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a3bce5db60b065%3A0x45f97a1834dc94e0!2sColegio%20Sollertia!5e0!3m2!1ses-419!2spe!4v1590988925595!5m2!1ses-419!2spe" width="400px" height="400px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" align = "middle" ></iframe></div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- ======= About Lists Section ======= -->
    <!-- End About Lists Section -->

    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
   <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contactenos</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <div type="button" data-toggle="modal" data-target="#exampleModal"><i class="bx bx-map"></i></div>
              <h3>Ubiquenos en:</h3>
              <p>Jr. Pastaza N° 116 - Pucallpa</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Nuestro correo</h3>
              <p>informes@sollertia.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Llamenos al:</h3>
              <p>(061) 570388<br>949947194</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->
@endsection




  