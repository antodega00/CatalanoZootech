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
                <p>bovini<br></p>
            </div>

            <div class="container section-title" data-aos="fade-up" style="padding-top: 40px;">
                <h2></h2>
                <p>identificativi visuali<br></p>
            </div>

            <div class="row">
                <!-- Prima riga -->
                <div class="col-md-4 text-center" data-aos="fade-right">
                    <img src="assets/img/img_prodotti/i21.png" class="img-fluid rounded" alt="Prodotto 1" style="width: 300px; height: 250px;">
                    <h2>BDN I21</h2>
                    <h5>CAISLEY FLEXO PLUS</h5>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/img_prodotti/i01.png" class="img-fluid rounded" alt="Prodotto 2" style="width: 300px; height: 250px;">
                    <h2>BDN I01</h2>
                    <h5>IB 010151 OS ID - LARGE PLUS</h5>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="200">
                    <img src="assets/img/img_prodotti/i02.png" class="img-fluid rounded" alt="Prodotto 3" style="width: 300px; height: 250px;">
                    <h2>BDN I02</h2>
                    <h5 class="mt-3">IB 02051 COMBI 2000 LARGEPLUS PLUS</h5>
                </div>
            </div>

            <div class="container section-title" data-aos="fade-up" style="padding-top: 150px;">
                <h2></h2>
                <p>marche bioptiche<br></p>
            </div>

            <div class="row mt-4">
                <!-- Seconda riga -->
                <div class="col-md-4 text-center" data-aos="fade-right">
                    <img src="assets/img/img_prodotti/i22.png" class="img-fluid rounded" alt="Prodotto 4" style="width: 300px; height: 250px;">
                    <h2>BDN I22</h2>
                    <h5 class="mt-3">CAISLEY FLEXO PLUS GENО</h5>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/img_prodotti/i04.png" class="img-fluid rounded" alt="Prodotto 5" style="width: 300px; height: 250px;">
                    <h2>BDN I04</h2>
                    <h5 class="mt-3">IB 13051 TST PLUS</h5>
                </div>
            </div>

            <div class="container section-title" data-aos="fade-up" style="padding-top: 150px;">
                <h2></h2>
                <p>boli ruminali<br></p>
            </div>

            <div class="row mt-4">
                <!-- Seconda riga -->
                <div class="col-md-4 text-center" data-aos="fade-right">
                    <img src="assets/img/img_prodotti/ib1-ib2.png" class="img-fluid rounded" alt="Prodotto 4" style="width: 300px; height: 250px;">
                    <h2>BDN IB1 - IB2</h2>
                    <h5 class="mt-3">IB 80052 OS ID - BOLO RUMINALE 52 G FDX-B<br>IB 80053 OS ID BOLO RUMINALE 75 G FDX-BPLUSPLUS</h5>
                </div>
                <div class="col-md-4 text-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="assets/img/img_prodotti/ib1-ib2.png" class="img-fluid rounded" alt="Prodotto 5" style="width: 300px; height: 250px;">
                    <h2>BDN IC1</h2>
                    <h5 class="mt-3">IO 80051 OS ID - BOLO RUMINALE 20 G FDX-B<br>IO 80052 OS ID - BOLO RUMINALE 52 G FDX-B</h5>
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
