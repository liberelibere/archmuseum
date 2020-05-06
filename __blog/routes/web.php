<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * 
 * http://localhost/
 * http://localhost/blog
 * http://localhost/kontakti
 * http://localhost/blog/1 (<--kuru bloga ierakstu gribam dabūt no datubāzes)
 * 
 * 
 * laravel dynamic roots
 * 
 * 
 */

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
    // ->take(1)
    // ->get();


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

// ------------



use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


Route::get('/contact', function () {

    return view('pages.contact');

});

//-------

// Route::post('/contact', function () {

//     $variables = request()->all();
//     $specific = request()->input('name', 'email');
//     // dd($variables);

//     // kodu, kas nosūta e-pastu

//     $emailSend = false;

//     if ($emailSend) {
//         return redirect ('/contact')
//         ->with('message', "Paldies!");
//     } else {
//         return redirect ('/contact')
//         ->with('error', "Pieteikums nav reģistrēts, lūdzu mēģini vēlreiz!");
//     }
    
// });




Route::post('/contact', function (Request $request) {

    Mail::send(new ContactMail($request));

    return redirect('/');
    
});



