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
                <p>ovini e caprini<br></p>
            </div>

            <div class="container section-title" data-aos="fade-up" style="padding-top: 40px;">
                <h2></h2>
                <p>marche visuali<br></p>
            </div>

            <div class="row">
                <!-- Prima riga -->
                <div class="col-md-4 text-center" data-aos="fade-right">
                    <img src="assets/img/img_prodotti/cy8.png" class="img-fluid rounded" alt="Prodotto 1" style="width: 330px; height: 250px;">
                    <h2>BDN CY8</h2>
                    <h5>CAISLEY FLEXO PLUSGENO</h5>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="100" style="padding-bottom: 50px;">
                    <img src="assets/img/img_prodotti/i16.png" class="img-fluid rounded" alt="Prodotto 2" style="width: 330px; height: 250px;">
                    <h2>BDN I16</h2>
                    <h5>IO 06052 OS - ID BOTTON</h5>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="200">
                    <img src="assets/img/img_prodotti/i15.png" class="img-fluid rounded" alt="Prodotto 3" style="width: 330px; height: 250px;">
                    <h2>BDN I15</h2>
                    <h5 class="mt-3">IO 04052 OS - ID SMALL</h5>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="200">
                    <img src="assets/img/img_prodotti/i10.png" class="img-fluid rounded" alt="Prodotto 3" style="width: 330px; height: 250px;">
                    <h2>BDN I10</h2>
                    <h5 class="mt-3">IO 06051 OS - ID COMBI 2000</h5>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="200">
                    <img src="assets/img/img_prodotti/i09.png" class="img-fluid rounded" alt="Prodotto 3" style="width: 330px; height: 250px;">
                    <h2>BDN I09</h2>
                    <h5 class="mt-3">IO 05051 OS - ID COMBI 2000 MINI</h5>
                </div>
            </div>

            <div class="container section-title" data-aos="fade-up" style="padding-top: 150px;">
                <h2></h2>
                <p>marche da macello<br></p>
            </div>

            <div class="row mt-4">
                <!-- Seconda riga -->
                <div class="col-md-4 text-center" data-aos="fade-right">
                    <img src="assets/img/img_prodotti/i11.png" class="img-fluid rounded" alt="Prodotto 4" style="width: 450px; height: 250px;">
                    <h2>BDN I11</h2>
                    <h5 class="mt-3">IO 09051 OS ID</h5>
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
