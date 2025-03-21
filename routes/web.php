<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hola/{nombre}', function ($nombre) {
    return view('hola', ['nombre' => $nombre]);
});

/*Bienvenido*/
Route::get('/bienvenido', function () {
    return view('bienvenido');
});
/*Contacto*/
Route::get('/contacto', function () {
    return view('contacto');
});

/*Persona*/
Route::get('/persona', function () {
    return view('persona');
});
