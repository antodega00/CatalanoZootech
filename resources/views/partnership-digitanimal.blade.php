@extends('welcome')
@section('content')

  <main class="main">

    <section style="padding-top: 130px;" class="d-flex align-items-center justify-content-center">
        <img src="/assets/img/logo_digitanimal.png" alt="logo digitanimal" >
    </section>


    <!-- Digitanimal intro -->
    <section id="services-2" class="section light-background">

        <div class="section-title" data-aos="fade-up"
        style="text-align: center; background-color: RGB(130, 183, 24); color: white; padding: 20px;">
            <p>SPEDIZIONI IN CONTRASSEGNO IN TUTTA ITALIA!<br>PAGA IL TUO ORDINE DIRETTAMENTE ALLA CONSEGNA.</p>
        </div>

        <div class="container-fluid">
            <div class="row gy-4">

                <!-- Colonna sinistra divisa in 2 righe -->
                <div class="col-md-7" style="padding-right: 150px; padding-left: 200px;">
                    <div class="row h-100">

                        <!-- Prima riga: Titolo e descrizione -->


                        <!-- Seconda riga: Bottone -->
                        <div id="carouselExampleIndicators" class="carousel slide rounded-5 overflow-hidden" data-bs-ride="carousel">

                            <div class="container section-title" data-aos="fade-up" style="padding-top: 40px;">
                                <h2></h2>
                                <p>Localizzatori GPS Digitanimal<br></p>
                                <h3>
                                    <br>Tieni sotto controllo i tuoi animali, ovunque siano. Localizzazione GPS e gestione semplice, direttamente dall’app.
                                    <br><br>Meno preoccupazioni, più tranquillità.
                                </h3>
                            </div><!-- End Section Title -->

                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>

                            <div class="carousel-inner">
                                <!-- Primo item -->
                                <div class="carousel-item active">
                                    <div class="carousel-item-content position-relative">
                                        <img src="assets/img/img_partnership/digitanimal_vacca.jpg" class="d-block w-100 rounded-4" alt="Localizzatore GPS Bovini">
                                        <!-- Overlay scuro -->
                                        <div class="overlay"></div>
                                        <!-- Testo sovrapposto -->
                                        <div class="carousel-caption d-none d-md-block">
                                            <h1>Localizzatore Bovini</h1>
                                        </div>
                                    </div>
                                </div>

                                <!-- Secondo item -->
                                <div class="carousel-item">
                                    <div class="carousel-item-content position-relative">
                                        <img src="assets/img/img_partnership/digitanimal_cavallo.jpg" class="d-block w-100 rounded-4" alt="Localizzatore GPS Equini">
                                        <div class="overlay"></div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h1>Localizzatore Equini</h1>
                                        </div>
                                    </div>
                                </div>

                                <!-- Terzo item -->
                                <div class="carousel-item">
                                    <div class="carousel-item-content position-relative">
                                        <img src="assets/img/img_partnership/digitanimal_pecora.jpg" class="d-block w-100 rounded-4" alt="Localizzatore GPS Ovini">
                                        <div class="overlay"></div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h1>Localizzatore Ovini</h1>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quarto item -->
                                <div class="carousel-item">
                                    <div class="carousel-item-content position-relative">
                                        <img src="assets/img/img_partnership/digitanimal_capra.jpg" class="d-block w-100 rounded-4" alt="Localizzatore GPS Caprini">
                                        <div class="overlay"></div>
                                        <div class="carousel-caption d-none d-md-block">
                                            <h1>Localizzatore Caprini</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>


                    </div>
                </div>

                <!-- Colonna destra: Griglia 2x2 -->
                <div class="col-md-5" style="padding-top: 47px; padding-right: 100px;">

                    <!-- Prima riga: Titolo e descrizione -->
                    <div class="container section-title" data-aos="fade-up" style="text-align: center;">
                        <p>Scopri i dispositivi<br></p>
                      </div><!-- End Section Title -->

                    <div class="row gy-4">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100" style="padding: 60px;">
                            <div class="service-item d-flex flex-column position-relative h-100">
                                <div class="mb-3 text-center">
                                    <img src="assets/img/img_partnership/cow1.png" alt="Icona GPS Vacche" class="icon-partnership-img">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <!-- Bottone che apre la modale -->
                                    <button type="button" class="btn btn-primary custom-btn" data-bs-toggle="modal" data-bs-target="#boviniModal">
                                        Localizzatori per Bovini
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200" style="padding: 60px;">
                            <div class="service-item d-flex flex-column position-relative h-100">
                                <div class="mb-3 text-center">
                                    <img src="assets/img/img_partnership/horse.png" alt="Icona GPS Equini" class="icon-partnership-img">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary custom-btn" data-bs-toggle="modal" data-bs-target="#boviniModal">
                                        Localizzatori per Equini
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300" style="padding: 60px;">
                            <div class="service-item d-flex flex-column position-relative h-100">
                                <div class="mb-3 text-center">
                                    <img src="assets/img/img_partnership/sheep.png" alt="Icona GPS Ovini" class="icon-partnership-img">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary custom-btn" data-bs-toggle="modal" data-bs-target="#boviniModal">
                                        Localizzatori per Ovini
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="400" style="padding: 60px;">
                            <div class="service-item d-flex flex-column position-relative h-100">
                                <div class="mb-3 text-center">
                                    <img src="assets/img/img_partnership/mutton.png" alt="Icona GPS Caprini" class="icon-partnership-img">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary custom-btn" data-bs-toggle="modal" data-bs-target="#boviniModal">
                                        Localizzatori per Caprini
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="container-center">
            <div data-aos="fade-up" style="text-align: center; padding-top: 50px; color: RGB(39, 61, 78);">
              <h1 style="font-size: 30px; font-weight: bold;">Scopri le nostre promo per l'acquisto di 3, 5 o 10 dispositivi.<br>Più acquisti più risparmi!<br>Spedizioni in tutta Italia, anche in contrassegno.<br><br><a href="{{ url('/#contact') }}">
                Contattaci
              </a>
               per maggiori info su prezzi e spedizioni!</h1>
            </div>
          </div>

          <!-- MODALE -->
        <!-- MODALE -->
        <div class="modal fade" id="boviniModal" tabindex="-1" aria-labelledby="boviniModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg"> <!-- Modale più grande -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="boviniModalLabel"><b>Localizzatori GPS Digitanimal</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Colonna sinistra: Immagine -->
                            <div class="col-md-6">
                                <img src="assets/img/img_partnership/Digitanimal_GPS.jpg" alt="GPS Bovini" class="img-fluid rounded">
                            </div>

                            <!-- Colonna destra: Testo -->
                            <div class="col-md-6 d-flex align-items-center">
                                <div>
                                    <p>Scopri i migliori localizzatori GPS per bovini, progettati per garantire la sicurezza e il monitoraggio costante del tuo bestiame.</p>
                                    <ul>
                                        <li>🌍 Tracciamento in tempo reale</li>
                                        <li>🔋 Batteria a lunga durata</li>
                                        <li>📱 Controllo da App</li>
                                    </ul>
                                    <p>Spedizioni in contrassegno in tutta Italia!<br>
                                        Paga il tuo ordine direttamente alla consegna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                        <a href="{{ url('/#contact') }}" class="btn btn-primary">Contattaci</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Digitanimal intro -->

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
                    <img src="assets/img/img_partnership/battery.png" alt="Icon battery" class="icon-partnership-img">
                </div>
                <h5 style="padding-top: 25px;">Da <b>6 mesi a 2 anni</b> di autonomia, per offrirti una massima tranquillità senza preoccupazioni di ricariche frequenti.</h5>
              </div>
            </div>
            <!-- Seconda colonna -->
            <div class="col-md-4">
              <div class="grid-item p-3 border text-center">
                <div class="mb-3 text-center">
                    <img src="assets/img/img_partnership/produttivita.png" alt="Icon productivity" class="icon-partnership-img">
                </div>
                <h5 style="padding-top: 25px"><b>Migliora la tua produttività</b> minimizzando i tempi operativi e le perdite di animali.</h5>
              </div>
            </div>
            <!-- Terza colonna -->
            <div class="col-md-4">
              <div class="grid-item p-3 border text-center">
                <div class="mb-3 text-center">
                    <img src="assets/img/img_partnership/notification.png" alt="Icon notification" class="icon-partnership-img">
                </div>
                <h5 style="padding-top: 25px;"><b>Ricevi notifiche sul tuo cellulare</b> se l’animale non è dove dovrebbe essere o il suo comportamento non è normale.</h5>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="my-section py-6">
        <!-- Prima riga: Titolo e descrizione -->
        <div class="container section-title" data-aos="fade-up" style="text-align: center;">
            <h2></h2>
            <p>Dettagli sull'Applicazione<br></p>
          </div><!-- End Section Title -->
        <div class="container">
          <div class="row">

            <!-- Prima colonna -->
            <div class="col-md-8" style="padding-right: 200px;">
                <div class="">
                  <h5 style="padding-top: 25px"><b>Localizzazione del bestiame sul palmo della mano.</b><br><br>Il localizzatore digitanimal registra l’attività giornaliera del tuo bestiame e ti invia dati sull’attività e la salute dell’animale.
                  <br><br><b>Personalizza i tuoi avvisi:</b><br><br>&nbsp;&nbsp;&nbsp;&nbsp;1. Avvisi relativi all'attività.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;2. Avvisi relativi alla temperatura.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;3. Avvisi per entrata/uscita dal recinto.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;4. Avvisi di perdita o furto.</h5>
                </div>
              </div>

            <!-- Seconda colonna -->
            <div class="col-md-4">
              <div class="grid-item p-3 border text-center">
                <div class="mb-3 text-center">
                    <img src="assets/img/img_partnership/gps_equino.png" alt="gps digitanimal" style="height: 350px; width: 380px;">
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
