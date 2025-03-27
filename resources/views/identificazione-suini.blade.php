@extends('welcome')
@section('content')

  <main class="main">

    <section style="padding-top: 80px;" class="d-flex align-items-center justify-content-center">
        <img src="/assets/img/logo_catalanozootech.png" alt="logo agriben" width="400px;" height="300px;">
    </section>


    <section id="services-2" class="section light-background">

        <!-- Titolo centrale -->
        <div class="section-title" data-aos="fade-up"
        style="text-align: center; background-color: RGB(130, 183, 24); color: white; padding: 20px;">
            <p>SPEDIZIONI IN CONTRASSEGNO IN TUTTA ITALIA!<br>PAGA IL TUO ORDINE DIRETTAMENTE ALLA CONSEGNA.</p>
        </div>

        <!-- Griglia 3x2 -->
        <div class="container mt-5">

            <div class="container section-title" data-aos="fade-right" style="padding-top: 40px; text-align: center;">
                <h2></h2>
                <p>suini<br></p>
            </div>

            <div class="container section-title" data-aos="fade-up" style="padding-top: 40px;">
                <h2></h2>
                <p>marche visuali<br></p>
            </div>

            <div class="row mt-4">
                <!-- Seconda riga -->
                <div class="col-md-4 text-center" data-aos="fade-left">
                    <img src="assets/img/img_prodotti/is2.png" class="img-fluid rounded" alt="Prodotto 4" style="width: 350px; height: 250px;">
                    <h2>BDN IS2</h2>
                    <h5 class="mt-3">IS 06052 OS ID – BUTTON</h5>
                </div>
            </div>

        </div>

    </section>

    <div class="container-center" style="padding: 50px;">
        <div data-aos="fade-up" style="text-align: center; padding-top: 50px; color: RGB(39, 61, 78); padding: 20px;">
          <h1 class="font-digitanimal">Spedizioni in tutta Italia, anche in contrassegno.<br><br><a href="{{ url('/#contact') }}">
            Contattaci
          </a>
           per maggiori info su prezzi e spedizioni!</h1>
        </div>
      </div>

    </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

@endsection
