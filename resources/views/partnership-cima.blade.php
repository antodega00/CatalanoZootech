@extends('welcome')
@section('content')

  <main class="main">

    <section style="padding-top: 130px;" class="d-flex align-items-center justify-content-center">
        <img src="/assets/img/logo_cima.png" alt="logo digitanimal" >
    </section>


    <!-- CIMA intro -->
    <section id="services-2" class="section light-background">
        <!-- Titolo centrale -->
        <div class="section-title text-center text-white" data-aos="fade-up"
            style="background-color: RGB(130, 183, 24); padding: 20px;">
            <p>CONSEGNIAMO DIRETTAMENTE A CASA TUA.<br>SPEDIZIONI IN TUTTA ITALIA!</p>
        </div>

        <div class="container-fluid">
            <div class="row gy-4">

                <!-- Colonna sinistra: Carosello e testo -->
                <div class="col-md-6" style="padding-left: 150px; padding-top: 50px; padding-right: 100px;">
                    <div class="container section-title" data-aos="fade-up">
                        <h2></h2>
                        <p>CIMA CONTROL CATTLE</p>
                        <h3>
                            <br>Scopri le bilance in movimento di CIMA: pesature precise, senza fermare il bestiame.
                            <br><br>Meno stress, più efficienza per il tuo allevamento.
                        </h3>
                    </div>

                    <div id="carouselExampleIndicators" class="carousel slide rounded-5 overflow-hidden" data-bs-ride="carousel" style="padding-top: 50px;">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/img_partnership/bilancia_cima.jpg" class="d-block w-100 rounded-4" alt="Localizzatore GPS Bovini">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/img_partnership/bilance_cima.jpg" class="d-block w-100 rounded-4" alt="Localizzatore GPS Equini">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="top: 55% !important;">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="top: 55% !important;">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <!-- Colonna destra: Video e immagine -->
                <div class="col-md-6" style="padding-top: 50px;">
                    <div class="container section-title text-center" data-aos="fade-up">
                        <p>Scopri i dispositivi</p>
                    </div>

                    <div class="row gy-4">
                        <div class="col-12" data-aos="fade-up" data-aos-delay="100" style="padding-bottom: 15px;">
                            <div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <div class="ratio ratio-16x9" style="max-width: 600px;">
                                    <iframe src="https://www.youtube.com/embed/MKogj_KJXYQ?si=N-0v49_SONYpRYo2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>

                        <div class="col-6 text-center" data-aos="fade-up" data-aos-delay="200"  style="padding-top: 27px;">
                            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/img_partnership/pedana_250.png" alt="Icona GPS Vacche" class="img-fluid rounded">
                            </div>

                            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="300" style="padding-top: 15px;">
                            <button type="button" class="btn btn-primary custom-btn">250 x 70</button>
                            </div>
                        </div>

                        <div class="col-6 text-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/img_partnership/pedana_300.png" alt="Icona GPS Vacche" class="img-fluid rounded">
                            </div>

                            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="300" style="padding-top: 15px;">
                            <button type="button" class="btn btn-primary custom-btn">300 x 70</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <!-- Testo sotto -->
        <div class="container text-center mt-5" data-aos="fade-up" style="padding-top: 30px;">
            <h1 style="font-size: 30px; font-weight: bold; color: RGB(39, 61, 78);">
                Consegniamo direttamente a casa tua!<br>Spedizioni in tutta Italia.<br><br>
                <a href="{{ url('/#contact') }}">Contattaci</a> per maggiori info su prezzi e spedizioni!
            </h1>
        </div>
    </section>

    <!-- CIMA intro -->

    {{-- SECTION DETTAGLI  --}}
    <section class="my-section py-6">
        <!-- Prima riga: Titolo e descrizione -->
        <div class="container section-title" data-aos="fade-up" style="text-align: center;">
            <h2></h2>
            <p>Dettagli sul prodotto<br></p>
          </div><!-- End Section Title -->
        <div class="container">
          <div class="row">
            <!-- Prima colonna -->
            <div class="col-md-4">
              <div class="grid-item p-3 border text-center">
                <div class="mb-3 text-center">
                    <img src="assets/img/img_partnership/bilancia_mucca.png" alt="Icon battery" class="icon-partnership-img">
                </div>
                <h5 style="padding-top: 25px;">Calcolo del <b>peso medio</b> e <b>totale</b> degli animali trasportati.</h5>
              </div>
            </div>
            <!-- Seconda colonna -->
            <div class="col-md-4">
              <div class="grid-item p-3 border text-center">
                <div class="mb-3 text-center">
                    <img src="assets/img/img_partnership/historical.png" alt="Icon productivity" class="icon-partnership-img">
                </div>
                <h5 style="padding-top: 25px">Possibilità di <b>memorizzazione delle pesate</b> in un menù storico.</h5>
              </div>
            </div>
            <!-- Terza colonna -->
            <div class="col-md-4">
              <div class="grid-item p-3 border text-center">
                <div class="mb-3 text-center">
                    <img src="assets/img/img_partnership/flash-drive.png" alt="Icon notification" class="icon-partnership-img">
                </div>
                <h5 style="padding-top: 25px;">Possibilità di <b>salvataggio dei dati</b> su pen drive USB.</h5>
              </div>
            </div>
          </div>
        </div>
    </section>

    </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

@endsection
