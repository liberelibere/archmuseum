@extends ('layouts.main')

@include('partials.menu',[ 'menuClass' => '' ])

@section('content')

<section class="section-kontakti">
    <div class="container d-flex justify-content-center">
        <div class="row mb-5">
            <div class="col-12 justify-content-center">
                <h1><span>SAZINIES AR MUMS</span></h1>
            </div>
        </div>
    </div>
    <div class="container kontakti justify-content-center">
        <div class="d-flex flex-column  karte">
            <iframe
            width="600"
            height="600"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCjEtcFQTD1weF116gzOd5jJf7QafozZIU
              &q=Latvijas+Arhitektūras+muzejs,Riga+Latvia" allowfullscreen class="shadow">
          </iframe>
        </div>
        <div class="d-flex flex-column align-items-start ml-4 darba-laiks">
           
                <h4 class="pt-1 pb-1"><span>DARBA LAIKS</span></h4>
                <p><span>Pirmdiena: 9.00-18.00</span></p>
                <p><span>Otrdiena - ceturtdiena: 9.00-17.00</span></p>
                <p><span>Piektdiena: 9.00-16.00</span></p>
                <p><span>Sestdiena, svētdiena: slēgts</span></p>
                <p class="pt-4"><span>Muzejs atrodas viduslaiku dzīvojamā ēkā M.Pils ielā 19, vienā no t.s. “Trijiem brāļiem”.</span></p>
        </div>
        <div class="d-flex flex-column align-items-start ml-4 kontakti-kontakti">
            <h4 class="pb-1"><span>KONTAKTI</span></h4>
            <p><span>Muzeja vadītāja – <strong>Mag. Art Ilze Martinsone</strong></span></p>
            <p><span>Tālr. 67220779</span></p>
            <p><span>E-pasts: <a href="mailto:Ilze.Martinsone@mantojums.lv" target="_top">Ilze.Martinsone@mantojums.lv</a></span></p>
            <p class="pt-4"><span>Galvenā krājuma glabātāja –  <strong>Mag. Art Ināra Appena</strong></span></p>
            <p><span>Tālr. 67220779</span></p>
            <p><span>E-pasts: <a href="mailto:Inara.Appena@mantojums.lv" target="_top">Inara.Appena@mantojums.lv</a></span></p>
        </div>
    </div>
    
</section>



<section>
    <div class="container-fluid d-flex py-sm-5 my-sm-4 px-sm-5 signup">
      <div class="row">
        <div class="col">

            @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @endif

          <form action="/contact" method="post" name="sign up for beta form" class="forma" id="form-subscribe">
            @csrf
            <div class="header">
               <h4><span>PIERAKSTIES JAUNUMIEM</span></h4>
            </div>
            
            <div class="input">
              <input type="text" class="button rounded-corners form-input" id="name" name="name" placeholder="Vārds...">
              <input type="email" class="button rounded-corners form-input" id="email" name="email" placeholder="e-pasts...">
              <input type="submit" class="button" name="Submit" id="btn-subscriber" value="Pieteikties">
            </div>
          </form>


        </div>
      </div>
    </div>
  </section>






@endsection

@section('title', "Kontakti")

