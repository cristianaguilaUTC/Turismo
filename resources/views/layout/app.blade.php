<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Turismo</title>
  
  
  <!--IMPORTAR JQUERY PARA LA VALIDACION -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- IMPORTANDO JQUERY VALIDATION-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <!--Importar popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    <!-- Importando archico js de boostrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Importando css de boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Importar iconos de Font osone para iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Importando sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Importando datatable-->
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <script src="//cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <!-- Importando fileInput -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.4/js/fileinput.min.js"></script>
    <!-- Importando el css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.4/css/fileinput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.4/js/locales/es.js"></script>

    <!-- ------------------------------- Datatables ----------------------------------->

    <script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.3/js/buttons.print.min.js"></script>
    
     <meta name="description" content="">
     <meta name="keywords" content="">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

     <!-- Favicons -->
    <link href="{{ asset('import/MediCio/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('import/MediCio//assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
      <link href="{{ asset('import/MediCio/MediCio/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{ asset('import/MediCio/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
      <link href="{{ asset('import/MediCio/assets/vendor/aos/aos.css')}}" rel="stylesheet">
      <link href="{{ asset('import/MediCio/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
      <link href="{{ asset('import/MediCio/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
      <link href="{{ asset('import/MediCio/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

      <!-- Main CSS File -->
      <link href="{{ asset('import/MediCio/assets/css/main.css')}}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Medicio
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="d-none d-md-flex align-items-center">
          <i class="bi bi-clock me-1"></i> Lunes - Sabado, 7AM a 17PM
        </div>
        <div class="d-flex align-items-center">
          <i class="bi bi-phone me-1"></i> Teléfono +593 0982602046
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-end">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <img src="{{ asset('import/MediCio/assets/img/logo.png')}}" alt="">
          <!-- Uncomment the line below if you also wish to use a text logo -->
          <!-- <h1 class="sitename">Medicio</h1>  -->
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="http://127.0.0.1:8000/turismos" class="active">Inicio</a></li>
            <li><a href="http://127.0.0.1:8000/turismos">Turismo</a></li>
            <li><a href="{{url('turismos/mapa')}}">Mapa</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>

  <!--================Header Menu Area =================-->
  
  @yield('contenido')
 
  <!--================ Start Footer Area =================-->
  
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contactos</h2>
        <p>Necesitas hacerte ver ven y visita nuestra sucursal, Latacunga, San Felipe, calle gonzalo, E5-126</p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        
        <iframe style="border:0; width: 100%; height: 370px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3063290664454!2d-78.63556072422178!3d-0.9179034353361397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d460483c1c1a3b%3A0x694a140aab02b1c!2sUniversidad%20T%C3%A9cnica%20de%20Cotopaxi%20(UTC)!5e0!3m2!1ses!2sec!4v1747723721841!5m2!1ses!2sec" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-3">
          </div>
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Dirección</h3>
                  <p>Cotopaxi,Latacunga, San Felipe, E5-126</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Teléfono</h3>
                  <p>+593 0982602046</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Correo</h3>
                  <p>cristian.aguila0661@utc.edu.ec</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-3">
          </div><!-- End Contact Form -->
        </div>
      </div>

    </section><!-- /Contact Section -->

    <!-- PIE DE PÁGINA -->
      
    <footer id="footer" class="footer light-background">
      <hr>
      <div class="container footer-top">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">Medicio</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Cotopaxi,latacunga</p>
              <p>ECUADOR</p>
              <p class="mt-3"><strong>Teléfono:</strong> <span>+593 982642046</span></p>
              <p><strong>correo:</strong> <span>cristian.aguila0661@utc.edu.ec</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Politicas</h4>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Servicios</h4>
            <ul>
              <li><a href="/">Paciente</a></li>
              <li><a href="/medicos/">medicos</a></li>
              <li><a href="/medicamentos/">medicamentos</a></li>
              <li><a href="/recetas/">recetas</a></li>
              <li><a href="#">Paciente</a></li>
  
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Sucursales</h4>
            <ul>
              <li><a href="#">Molestiae accusamus iure</a></li>
              <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Extras</h4>
            <ul>
              <li><a href="#">Ipsam</a></li>
              <li><a href="#">Laudantium dolorum</a></li>
              <li><a href="#">Dinera</a></li>
              <li><a href="#">Trodelas</a></li>
              <li><a href="#">Flexo</a></li>
            </ul>
          </div>

        </div>
      </div>

      <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Medicio</strong> <span>Cristian Aguila</span></p>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
        </div>
      </div>


    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('import/MediCio/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('import/MediCio/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('import/MediCio/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('import/MediCio/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('import/MediCio/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('import/MediCio/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('import/MediCio/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBigiRgokOOjrShvA5Mi93R6kmhIYj8yPE&callback=initMap"></script>
    {% if messages %}
      @if(session('mensaje'))
        <script>
            Swal.fire({
                title: "CONFIRMACIÓN",
                text: @json(session('mensaje')), // asegura caracteres especiales y evita errores
                icon: "success"
            });
        </script>
    @endif


    <style>
      .error{
        color:red;
        font-weight: bold;
        
      }
      .form-control.error{
        border: 1px solid red;
        
      }
    </style>

</body>

</html>
 