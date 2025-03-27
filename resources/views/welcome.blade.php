<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Catalano Zootech</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

    @if(Request::is('/'))
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/logo_ctz.png" alt="Catalano Zootech" class="img-logo" style="height: 100px; border-radius: 50%;">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#boli">Boli</a></li>
                    <li><a href="#services">Le Nostre Partnership</a></li>
                    <li><a href="#about">Servizi</a></li>
                    <li><a href="#team">Chi siamo</a></li>
                    <li><a href="#contact">Contatti</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
    @else
    <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: rgba(21, 34, 43, 0.85);">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="assets/img/logo_ctz.png" alt="Catalano Zootech" class="img-logo" style="height: 100px; border-radius: 50%;"> <!-- Modifica il valore height -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#boli">Boli</a></li>
                    <li><a href="#services">Le Nostre Partnership</a></li>
                    <li><a href="#about">Servizi</a></li>
                    <li><a href="#team">Chi siamo</a></li>
                    <li><a href="#contact">Contatti</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>
    @endif

    @yield('content')

    <a href="https://wa.me/3318098020" class="whatsapp-float" target="_blank">
        <div class="icon">
            {{-- <i class="bi bi-easel"></i> --}}
            <img src="assets/img/whatsapp.png" class="" alt="" style=" width: 80px; height: 80px;">
          </div>
    </a>


    <footer id="footer" class="footer dark-background">
        <div class="container footer-top">
          <div class="row gy-4">
            <!-- Logo e nome (centrato su mobile) -->
            <div class="col-12 col-lg-4 footer-about text-center">
              {{-- <a href="/">
                <img src="assets/img/logo_catalanozootech.png" alt="Catalano Zootech" class="img-fluid" style="max-width: 300px;">
              </a> --}}
                <a href="/">
                <img src="assets/img/logo_ctz.png" alt="Catalano Zootech" class="img-fluid"
                style="max-width: 170px; border-radius: 50%;">
                </a>
            </div>
            <!-- Informazioni di contatto (centrate su mobile) -->
            <div class="col-12 col-lg-4 footer-contact pt-3 text-center">
              <a href="#contact" class="logo d-flex align-items-center justify-content-center">
                <span class="sitename" style="font-size: 24px;">Contatti</span>
              </a>
              <p class="mt-3">Corso Sicilia, 43</p>
              <p>98051 Barcellona Pozzo di Gotto ME</p>
              <p class="mt-3"><strong>Telefono:</strong> <span>+39 3318098020</span></p>
              <p><strong>Email:</strong> <span>catalanozootech@example.com</span></p>
            </div>
            <!-- Social links (centrati su mobile) -->
            <div class="col-12 col-lg-4 social-links d-flex justify-content-center align-items-center mt-4">
                <div class="m">
                    <span class="sitename" style="font-size: 24px; color: RGB(255, 74, 23);">Social</span>
                </div>
                <a href="https://www.facebook.com/CatalanoZootech" class="mx-3"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/catalanozootech/"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="container copyright text-center mt-4">
          <p>©<span> Copyright All Rights Reserved</span></p>
          <div class="credits">
            Designed by <a href="/">ADG WebLab</a>
          </div>
        </div>
      </footer>


      <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>
</html>
