<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('vista_inicio');

Route::get('/Principal', function () {
    $datos = [
        "titulo" => "Tienda Virtual - Vista Principal",
        "mensaje" => "Bienvenido a la vista principal",
        "Autor" => "Adriana"
    ];

    return view('Principal', $datos);
})->name('Principal');