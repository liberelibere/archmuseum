<?php

Route::get('/', function () {
    $posts = \App\Post::orderBy('created_at', 'DESC')
    ->take(4)
    ->get();

    return view('pages.home', [
        'posts' => $posts
      ]);
});


Route::get('/izstades', function () {
    $particular_post = \App\Post::latest()
    ->take(1)
    ->get();


    $posts =  \App\Post::orderBy('created_at', 'DESC') 
    ->take(11)
    ->get();

   
    return view('pages.izstades', [
    'posts' => $posts,
    'particular_post'=>  $particular_post
    ]);  
    
});




Route::get('/blog/{id}', function ($id) {

    $blogItem = \App\Post::find($id);


    $posts =  \App\Post::orderBy('created_at', 'DESC') 
    ->take(4)
    ->get();

   
    return view('pages.blog', [
    'posts' => $posts,
    'blogItem' => $blogItem
    ]);

});


Route::get('/muzejs', function () {

    return view('pages.muzejs');
});


use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


Route::get('/contact', function () {

    return view('pages.contact');

});


Route::post('/contact', function (Request $request) {

    Mail::send(new ContactMail($request));

    return redirect('/');
    
});

