@extends('welcome')
@section('content')

  <main class="main">

    <section style="padding-top: 130px;" class="d-flex align-items-center justify-content-center">
        <img src="/assets/img/logo_agriben.png" alt="logo agriben" width="500px;" >
    </section>


    <!-- CIMA intro -->
    <section id="services-2" class="section light-background">

        <!-- Titolo centrale -->
        <div class="section-title text-center text-white" data-aos="fade-up"
            style="background-color: RGB(130, 183, 24); padding: 20px;">
            <p>CONSEGNIAMO DIRETTAMENTE A CASA TUA.<br>SPEDIZIONI IN TUTTA ITALIA!</p>
        </div>

        <div class="container-fluid">

            <div class="col-md-12" style="padding-top: 80px; background-color: #fff; text-align: center;">
                <div class="container section-title" data-aos="fade-up">
                    <h2></h2>
                    <p>Gabbie multifunzionali</p>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-md-6" style="padding-left: 150px; padding-top: 50px; background-color: #fff;">
                    <div class="container section-title" data-aos="fade-up">
                        <h2></h2>
                        <p>PM 2400</p><br>
                        <h6>
                            <ul class="lista-pulita">
                                <li>Porta anteriore a scelta: PM 83, PM 85 oppure PM 80.</li>
                                <li>4 porte laterali per un accesso totale dell'animale.</li>
                                <li>Spostamento della gabbia con trattore permesso dell'attacco terzo punto.</li>
                                <li>Adatta a tutte le razze di animali.</li>
                                <li>Venduta verniciata oppure zincata a caldo.</li>
                            </ul><br><br>
                            Dimensioni interne:<br><br>
                            <ul>
                                <li>Lunghezza 240cm</li>
                                <li>Larghezza 82 cm</li>
                                <li>Altezza 170 cm</li>
                                <li>Peso 550 Kg</li>
                            </ul>
                        </h6>
                    </div>
                </div>

                <div class="col-md-6" style="padding-top: 100px; background-color: #fff;">

                    <div class="row gy-4">
                        <div class="col-12" data-aos="fade-up" data-aos-delay="100" style="padding-bottom: 15px;">
                            <div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <div class="ratio ratio-16x9" style="max-width: 600px;">
                                    <img src="/assets/img/img_partnership/pm2400.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="padding-top: 80px;">

                    <div class="row gy-4">
                        <div class="col-12" data-aos="fade-up" data-aos-delay="100" style="padding-bottom: 15px; padding-top: 100px;">
                            <div class="col-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <div class="ratio ratio-16x9" style="max-width: 600px;">
                                    <img src="/assets/img/img_partnership/pm2810.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" style="padding-left: 0px; padding-top: 100px; padding-right: 150px; text-align: right;">
                    <div class="container section-title" data-aos="fade-up">
                        <h2></h2>
                        <p>PM 2810</p>
                        <h6 style="padding-top: 40px;">
                            <ul class="lista-pulita">
                                <li>La gabbia può essere equipaggiata per comandi manuali o con sistema idraulico con centralina</li>
                                <li>Porta anteriore PM 97 (consigliata per la vaccinazione nasale)</li>
                                <li>Alza testa manuale o idraulico, necessario per la vaccinazione nasale</li>
                                <li>Pareti variabili per tutta la lunghezza dell’animale (tra 40 e 82 cm)</li>
                                <li>Tappeto in gomma di serie</li>
                                <li>Accesso al collo dell’animale nella parte anteriore della gabbia per la vaccinazione</li>
                                <li>Porte superiori reversibili</li>
                                <li>Porte inferiori per l’accesso alle gambe e alle mammelle</li>
                                <li>Barra anti-rinculo e barra anti-calcio</li>
                                <li>Immobilizzazione totale dell’animale</li>
                                <li>Sicurezza dell’operatore (un animale ben contenuto è un animale più calmo)</li>
                                <li>Ottimizzazione dei tempi impiegati per la cura dell’animale</li>
                                <li>La gabbia può essere verniciata oppure zincata a caldo</li>
                              </ul>

                              <style>
                                .lista-pulita {
                                  list-style-type: none; /* Rimuove TUTTI i segni */
                                  padding-left: 0;       /* Elimina il rientro */
                                  margin-left: 0;        /* Allinea a sinistra senza spazi */
                                }
                                .lista-pulita li {
                                  padding-bottom: 15px;   /* Spaziatura tra le voci (opzionale) */
                                }
                              </style>
                        </h6>
                    </div>
                </div>

                <!-- Colonna destra: Video e immagine -->

        </div>

        <!-- Testo sotto -->
        <div class="container text-center mt-5" data-aos="fade-up">
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
                    <img src="assets/img/img_partnership/cow_healt.png" alt="Icon battery" class="icon-partnership-img">
                </div>
                <h5 style="padding-top: 25px;">Buona e facile manutenzione, mantenendo in una condizione di <b>benessere e sicurezza l'animale</b>.</h5>
              </div>
            </div>
            <!-- Seconda colonna -->
            <div class="col-md-4">
              <div class="grid-item p-3 border text-center">
                <div class="mb-3 text-center">
                    <img src="assets/img/img_partnership/kick.png" alt="Icon productivity" class="icon-partnership-img">
                </div>
                <h5 style="padding-top: 25px">Protezione da eventuali<br> <b>calci dell'animale</b>. Opera in totale sicurezza.</h5>
              </div>
            </div>
            <!-- Terza colonna -->
            <div class="col-md-4">
              <div class="grid-item p-3 border text-center">
                <div class="mb-3 text-center">
                    <img src="assets/img/img_partnership/clock.png" alt="Icon notification" class="icon-partnership-img">
                </div>
                <h5 style="padding-top: 25px;"><br><b>Rapida<br>operatività.</b></h5>
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
