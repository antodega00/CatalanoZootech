<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/partnership-digitanimal', function () {
    return view('partnership-digitanimal'); // Nome del file nella cartella views
})->name('partnership.digitanimal');


Route::get('/partnership-cima', function () {
    return view('partnership-cima'); // Nome del file nella cartella views
})->name('partnership.cima');


Route::get('/partnership-agriben', function () {
    return view('partnership-agriben'); // Nome del file nella cartella views
})->name('partnership.agriben');


