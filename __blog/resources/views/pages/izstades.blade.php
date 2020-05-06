@extends('layouts.main')

@include('partials.menu',[ 'menuClass' => '' ])

@section('content')

@foreach ($particular_post as $particularItem)

<div class="container main-post" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{$particularItem->img}}');">
    <div class="row ml-3">

        
        <div @if ($loop->last) class="hidden" @endif>
            <h1>{{$particularItem->title}}</h1>
            <p class="blog-date">no {{$particularItem->starts}} līdz {{$particularItem->ends}}</p>
            <p class="blog-text">{{$particularItem->excerpt}}</p>
            <a class='btn btn-full' href="/blog/{{$particularItem->id}}">Lasīt vairāk</a>
        </div>
       

    </div>
</div>
@endforeach


<section class="section-arhivs pb-5 pt-5">
    <div class="container d-flex justify-content-center mb-5">
        <h3><span>IZSTĀŽU ARHĪVS</span></h3>
    </div>

    

    <div class="container ieraksti">

        @foreach ($posts as $postItem)
        @if($postItem->id != $particularItem->id)

        <div class="d-flex flex-column justify-content-start">
            <div class="overlay"><img class="img-arhivs" alt="Card header image" src="{{$postItem->img}}"></div>
            <div class="apraksts">
                <h4><span><a class="heading-link" href="/blog/{{$postItem->id}}">{{$postItem->title}}</a></span></h4>
                <p class="card-date"><span>{{ $postItem->created_at->diffForHumans() }}</span></p>
                <p class="card-text"><span>{{$postItem->excerpt}}</span></p>
            </div>
        </div>
       
        @endif
        @endforeach

    </div>

    



</section>

 @endsection
 @section('title', "Izstādes")



