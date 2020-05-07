@extends ('layouts.main')

@include('partials.menu',[ 'menuClass' => '' ])

@section('content')

 <div class="container d-flex align-items-center justify-content-center mb-4 bg-black"><img src="{{$blogItem->img}}" alt="" class="blog-img"></div>
  <div class="container blog d-flex">
      <div class="row">
         <div class="col-12"><h1><span>{{$blogItem->title}}</span></h1></div>
         <div class="col-12"><p><span>{{$blogItem->body}}</span></p></div> 
      </div>
  </div>
    


<section class="section-arhivs pb-5 mb-xl-5 pt-5">
    <div class="container d-flex justify-content-center mb-5">
        <h3><span>SAISTĪTIE RAKSTI</span></h3>
    </div>
    <div class="container ieraksti-blog">

        @foreach ($posts as $postItem)
        @if($postItem->id != $blogItem->id)

        <div class="d-flex flex-column justify-content-start">
            <div class="overlay"><img class="img-arhivs" alt="Card header image" src="{{$postItem->img}}"></div>
            <div class="apraksts">
                <h4><span><a class="heading-link" href="/blog/{{$postItem->id}}">{{$postItem->title}}</a></span></h4>
                <p class="card-date"><span>{{ $postItem->created_at->diffForHumans()}}</span></p>
                <p class="card-text"><span>{{$postItem->excerpt}}</span></p>
            </div>

        </div>
        @endif
        @endforeach
    </div>
</section>

@endsection

@section('title', "BLOG")


    
