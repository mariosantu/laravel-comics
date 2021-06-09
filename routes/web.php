<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $comics_array = config('comics');
    //dd($comics_array);

    $data = [
        'comics' => $comics_array
    ];


    return view('home', $data);
})->name('home'); 


Route::get('/details/{id}', function ($id) {
    $comics_array = config('comics');
    //dd($comics_array);

    $details = [];
    foreach($comics_array as $comic) {
        
        if($comic['id'] == $id) {
            $details = $comic;
        }
    }
    //dd($details);

    if (empty($details)) {
        abort('404');
    }

    $data = [
        'details' => $details
    ];

    return view('details', $data);
})->name('details');
