
@extends('layouts.main')

@section('content')


<header>

    @include('partials.menu',[ 'menuClass' => 'transparent' ])
    
    
<div class="container hero-text-box pl-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-wrap">Latvijas arhitektūras muzejs </h1>
            <h2>Latvijas Muzeju asociācijas biedrs <br> Member of International Confederation of Architectural Museums ICAM</h2>
        </div>
        <div class="col-12">
        <a class='btn btn-full' href="/contact">Apmeklē muzeju</a>
        <a class='btn btn-ghost' href="/muzejs">Uzzini vairāk</a>
        </div>
    </div> 
</div>
</header>




<section>
    <div class="container d-flex justify-content-center mb-5 mt-5">
        <h3><span>JAUNUMI</span></h3>
    </div>
    <div class="row d-flex px-5">


        @foreach ($posts as $postItem)

        

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="jaunumi-card">
                <div class="overlay"><img class="card-img-top" alt="Card header image" src="{{$postItem->img}}"></div>
                
                <div class="apraksts">
                    <h4><span><a class="heading-link" href="/blog/{{$postItem->id}}">{{$postItem->title}}</a></span></h4>
                    {{-- <h4><span>{{$postItem->title}}</span> </h4> --}}
                    <p class="card-date"><span>{{ $postItem->created_at->diffForHumans() }}</span></p>
                    <p class="card-text"><span>{{$postItem->excerpt}}</span></p>
                </div>
                
            </div>
        </div>

        
        
        
            @endforeach
        
    </section>




<section class="slaideris mt-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://momenti.lv/pictures/img.php?img=564/momenti-jordan-sanchez-20150721-1.jpg" class="d-block w-100 opacity" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Rīgas vēsturiskais centrs</h5>
              <p>Atklāj Latvijas galvaspilsētas vēsturisko apbūvi no 18. gs otrās puses līdz 1940. gadam.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://momenti.lv/pictures/img.php?img=2156/momenti.lv-Rihards-Sukovs-IMG_4749.jpg" class="d-block w-100 opacity" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Padomju laika arhitektūras mantojums</h5>
              <p>Iepazīsti modernisma perioda arhitektūru Latvijā.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://momenti.lv/pictures/img.php?img=230/Momenti%20-%20ASprogis%20-%2005.jpg" class="d-block w-100 opacity" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Mūsdienu arhitektūra</h5>
              <p>Arhitektūra Latvijā pēc 1991. gada.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</section> 

@endsection

@section('title', "Latvijas Arhitektūras muzejs")
@section('nav-class', "transparent")

