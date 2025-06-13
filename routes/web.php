<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TurismoController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/turismos/mapa', [TurismoController::class, 'mapa']);
Route::resource('turismos', TurismoController::class);
