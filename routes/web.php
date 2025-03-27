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

Route::get('/identificazione-bovini', function () {
    return view('identificazione-bovini'); // Nome del file nella cartella views
})->name('identificazione.bovini');

Route::get('/identificazione-ovini', function () {
    return view('identificazione-ovini'); // Nome del file nella cartella views
})->name('identificazione.ovini');

Route::get('/identificazione-suini', function () {
    return view('identificazione-suini'); // Nome del file nella cartella views
})->name('identificazione.suini');

