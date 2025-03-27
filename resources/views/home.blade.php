@extends('welcome')
@section('content')

<div>

    <main class="main">

      <!-- Hero Section -->
      <section id="hero" class="hero section dark-background">
        <img src="assets/img/foto_iniziale.jpg" alt="" data-aos="fade-in">

        <div class="container d-flex flex-column align-items-end justify-content-center text-end">
            <h2 data-aos="fade-up" data-aos-delay="100">
                <a href="#boli" class="text-hover-hero">IDENTIFICHIAMO</a><br>
                <a href="#services" class="text-hover-hero">LOCALIZZIAMO</a><br>
                <a href="/" class="text-hover-hero">MONITORIAMO LA<br> TUA AZIENDA</a><br>
                <p>Migliora le tue performance con<br>le nostre Partnership.</p>
            </h2>
        </div>
    </section>



      <!-- Services Section -->
      <section id="boli" class="services section" style="padding-bottom: 70px;">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up" style="height: 190px;">
            <div class="row align-items-center">
            <!-- Titolo e descrizione -->
            <div class="col-md-9">
                <h2>Boli</h2>
                <p>La nostra linea di identificazione animale</p>
            </div>
            <!-- Bottone di download -->
            <div class="col-md-3 text-center" style="padding: 25px;">
                <a href="assets/pdf/Brochure_Catalano_Zootech.pdf" class="btn btn-primary download-btn" download>
                    <p style="font-size: 15px;"><i class="bi bi-download" style="padding-right: 13px;"></i> Scarica il nostro Catalogo</p>
                </a>
            </div>
            </div>
        </div>
        <!-- End Section Title -->


        <div class="container desktop-version" data-aos="fade-up" data-aos-delay="100" style="padding-bottom: 100px; padding-top: 50px;">

          <div class="row gy-5">

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
              <div class="service-item">
                <div class="img">
                  <img src="assets/img/immagine_bovini_1.jpg" class="img-fluid" alt="">
                </div>
                <div class="details position-relative" style="top: 100px;">
                  <div class="icon">
                    {{-- <i class="bi bi-activity"></i> --}}
                    <img src="assets/img/cow.png" class="img-fluid" alt="" style="padding: 8px;">
                  </div>
                  <a href="{{ route('identificazione.bovini') }}" class="stretched-link">
                    <h3>Bovini</h3>
                  </a>
                  <p>Clicca per scoprire la nostra linea di identificativi, marche e boli per bovini.</p>
                </div>
              </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
              <div class="service-item">
                <div class="img">
                  <img src="assets/img/immagine_ovini_1.jpg" class="img-fluid" alt="">
                </div>
                <div class="details position-relative" style="top: 100px;">
                  <div class="icon">
                    {{-- <i class="bi bi-broadcast"></i> --}}
                    <img src="assets/img/sheep.png" class="img-fluid" alt="" style="padding: 8px;">
                  </div>
                  <a href="{{ route('identificazione.ovini') }}" class="stretched-link">
                    <h3>Ovini</h3>
                  </a>
                  <p>Clicca per scoprire la nostra linea di marche visuali e da macello per ovini e caprini.</p>
                </div>
              </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
              <div class="service-item">
                <div class="img">
                  <img src="assets/img/immagine_suini_1.jpg" class="img-fluid" alt="">
                </div>
                <div class="details position-relative" style="top: 100px;">
                  <div class="icon">
                    {{-- <i class="bi bi-easel"></i> --}}
                    <img src="assets/img/pig.png" class="img-fluid" alt="" style="padding: 9px;">
                  </div>
                  <a href="{{ route('identificazione.suini') }}" class="stretched-link">
                    <h3>Suini</h3>
                  </a>
                  <p>Clicca per scoprire la nostra linea di marche visuali per suini.</p>
                </div>
              </div>
            </div><!-- End Service Item -->

          </div>
        </div>

        <div class="text-center mb-4 mobile-version">

            <div id="carouselExample" class="carousel slide mt-3" data-bs-ride="carousel" style="max-width: 300px; margin: auto;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/immagine_bovini_1.jpg" class="d-block w-100 carousel-img" alt="Bovini">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/immagine_ovini_1.jpg" class="d-block w-100 carousel-img" alt="Ovini">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/immagine_suini_1.jpg" class="d-block w-100 carousel-img" alt="Suini">
                    </div>
                </div>

                <!-- Pulsanti di navigazione -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="container section-title" data-aos="fade-up" style="padding: 40px;">
                <div class="row align-items-center">
                    <!-- Bottone di download -->
                    <div class="dropdown">
                        <button class="btn btn-primary download-btn" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <p style="font-size: 15px;" class="dropdown-toggle">I nostri boli</p>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="{{ route('identificazione.bovini') }}">Bovini</a></li>
                            <li><a class="dropdown-item" href="{{ route('identificazione.ovini') }}">Ovini</a></li>
                            <li><a class="dropdown-item" href="{{ route('identificazione.suini') }}">Suini</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .carousel {
                border-radius: 20px; /* Arrotonda i bordi */
                overflow: hidden; /* Impedisce alle immagini di fuoriuscire */
                max-width: 300px; /* Mantiene il carosello compatto */
                margin: auto;
            }

            .carousel-img {
                max-height: 200px; /* Limita l'altezza */
                object-fit: cover; /* Evita distorsioni */
                width: 100%; /* Mantiene la larghezza */
            }

            .carousel-control-prev {
                left: 4% !important;
                top: 50% !important;
            }

            .carousel-control-next {
                right: 4% !important;
                top: 50% !important;
            }

        </style>
      </section><!-- /Services Section -->



      <!-- Services 2 Section -->
      <section id="services" class="services-2 section light-background" style="padding-top: 50px;">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Collaborazioni</h2>
          <p>Le nostre Partnership</p>
        </div><!-- End Section Title -->

        <div class="container" style="padding: 25px;">

          <div class="row gy-4">


            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item d-flex flex-column position-relative h-100">
                    <!-- Sezione immagine centrata -->
                    <div class="mb-3">
                        <img src="assets/img/logo_digitanimal.png" alt="Icona" class="icon-img mx-auto d-block" style="max-width: 230px;">
                    </div>
                    <!-- Sezione testo -->
                    <div>
                        <p class="description" style="margin-top: 20px;">
                            Tieni sempre sotto controllo il tuo bestiame con il GPS per bestiame più potente e diffuso al mondo.<br><br><br>
                            <a href="{{ route('partnership.digitanimal') }}"><span class="text-hover">Clicca per scoprire di più</span></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item d-flex flex-column position-relative h-100">
                    <!-- Sezione immagine centrata -->
                    <div class="mb-3">
                        <img src="assets/img/logo_cima.png" alt="Icona" class="icon-img mx-auto d-block" style="max-width: 230px;">
                    </div>
                    <!-- Sezione testo -->
                    <div>
                        <p class="description" style="margin-top: 20px;">
                            Tieni sempre sotto controllo il tuo bestiame con il GPS per bestiame più potente e diffuso al mondo.<br><br><br>
                            <a href="{{ route('partnership.cima') }}"><span class="text-hover">Clicca per scoprire di più</span></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item d-flex flex-column position-relative h-100">
                    <!-- Sezione immagine centrata -->
                    <div class="mb-3">
                        <img src="assets/img/logo_agriben.png" alt="Icona" class="icon-img mx-auto d-block" style="max-width: 230px;">
                    </div>
                    <!-- Sezione testo -->
                    <div>
                        <p class="description" style="margin-top: 20px;">
                            Tieni sempre sotto controllo il tuo bestiame con il GPS per bestiame più potente e diffuso al mondo.<br><br><br>
                            <a href="{{ route('partnership.agriben') }}"><span class="text-hover">Clicca per scoprire di più</span></a>
                        </p>
                    </div>
                </div>
            </div>


          </div>

        </div>

      </section><!-- /Services 2 Section -->


        <!-- Chi Siamo Section -->
        <section id="about" class="about section py-5">
            <div class="container" data-aos="fade-up">
                <div class="row align-items-center">

                    <div class="container section-title" data-aos="fade-up" style="text-align: center;">
                        <h2></h2>
                        <p>I nostri servizi<br></p>
                      </div><!-- End Section Title -->

                    <!-- Immagine sopra il testo su mobile -->
                    <div class="col-lg-6 col-md-12 order-md-2 text-center" data-aos="fade-left" data-aos-delay="200" style="padding-bottom: 30px;">
                        <img src="assets/img/chi_siamo.jpg" class="img-fluid" alt="Chi siamo">
                    </div>

                    <!-- Testo -->
                    <div class="col-lg-6 col-md-12 order-md-1" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-center text-md-start">

                            <p class="card-text">
                                Catalano Zootech è un'azienda leader nel settore dell'identificazione animale, specializzata nella produzione e spedizione di marche auricolari e di materiale zootecnico per allevamenti e aziende agricole.<br><br>

                                Grazie alla nostra esperienza pluriennale e all'uso di tecnologie avanzate, garantiamo prodotti di alta qualità, conformi alle normative vigenti e riconosciuti per la loro affidabilità e durata nel tempo.<br><br>

                                Le nostre marche auricolari sono disponibili anche su vetinfo.it, assicurando un accesso facile e immediato ai migliori strumenti per la gestione e il tracciamento del bestiame.<br><br>

                                Oltre alla fornitura di dispositivi per l’identificazione animale, offriamo consulenza specializzata per supportare aziende agricole e allevatori nella realizzazione di investimenti e nell'accesso a finanziamenti a fondo perduto.<br><br>

                                Contattaci per richiedere un preventivo gratuito e scopri come possiamo aiutarti a far crescere la tua attività!
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Chi siamo Section -->
        <section id="team" class="team section light-background py-5">
            <div class="container section-title" data-aos="fade-up" style="text-align: center;">
              <h2></h2>
              <p>Chi siamo<br></p>
            </div><!-- End Section Title -->

            <div class="container">
              <div class="row gy-5 align-items-center">
                <!-- Team Member -->
                <div class="col-12 col-md-5" data-aos="fade-up" data-aos-delay="200" style="padding-top: 50px;">
                  <div class="member">
                    <div class="pic">
                      <img src="assets/img/team/foto_Marco.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                      <h4>Marco Catalano</h4>
                      <span>Proprietario di CatalanoZootech</span>
                      <div class="social">
                        <a href="https://www.facebook.com/CatalanoZootech"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/catalanozootech/"><i class="bi bi-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div><!-- End Team Member -->

                <!-- Nuova Card con Testo -->
                <div class="col-12 col-md-7 d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <div class="p-3 p-md-0">
                    <p class="card-text text-center text-md-start">
                      Dopo la laurea in medicina veterinaria, ho sentito il bisogno di trasformare la mia passione in qualcosa di più grande, così è nata Catalanozootech.<br><br>
                      Fin dall’inizio, il mio obiettivo è stato quello di offrire soluzioni innovative per il benessere e la gestione degli animali, unendo competenza scientifica e amore per questo settore.<br><br>
                      Grazie all’esperienza maturata sul campo e ad un costante aggiornamento, ho costruito un’azienda solida, capace di rispondere alle esigenze di allevatori e professionisti del settore.<br><br>
                      Ogni giorno lavoriamo con dedizione per sviluppare prodotti e servizi che migliorano la qualità della vita degli animali, con un approccio basato su innovazione, etica e rispetto.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- /chi Siamo Section -->


      <!-- Contact Section -->
      <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Contatti</h2>
          <p>I nostri contatti</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">
            <div class="col-lg-6 ">
              <div class="row gy-4">

                <div class="col-lg-7">
                  <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Indirizzo</h3>
                    <p>Corso Sicilia, 43, 98051 Barcellona Pozzo di Gotto ME</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-5">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                      <i class="bi bi-envelope"></i>
                      <h3>Email</h3>
                      <p>catalanozootech@example.com</p>
                    </div>
                  </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone"></i>
                    <h3>Rep. Commerciale</h3>
                    <p>+39 3318098020</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                      <i class="bi bi-telephone"></i>
                      <h3>Per Marche Auricolari</h3>
                      <p>+39 3318098020</p>
                    </div>
                  </div><!-- End Info Item -->

              </div>
            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Nome" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Oggetto" required="">
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="Messaggio" required=""></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Il tuo messaggio è stato inviato. Grazie!</div>

                    <button type="submit">Invia Messaggio</button>
                  </div>

                </div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

      </section><!-- /Contact Section -->
    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

</div>
@endsection

