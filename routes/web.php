<?php

use App\Http\Controllers\GridTabelaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pessoas', App\Http\Controllers\GridTabelaController::class);

Route::prefix('parte1')->group(function () {
    Route::get('/exercicio1', App\Http\Controllers\parte1\Parte1Exercicio1Controller::class);
    Route::get('/exercicio2', App\Http\Controllers\parte1\Parte1Exercicio2Controller::class);
    Route::get('/exercicio3', App\Http\Controllers\parte1\Parte1Exercicio3Controller::class);
    Route::get('/exercicio4', App\Http\Controllers\parte1\Parte1Exercicio4Controller::class);
    Route::get('/exercicio5', App\Http\Controllers\parte1\Parte1Exercicio5Controller::class);
    Route::get('/exercicio6', App\Http\Controllers\parte1\Parte1Exercicio6Controller::class);
    Route::get('/exercicio7', App\Http\Controllers\parte1\Parte1Exercicio7Controller::class);
    Route::get('/exercicio8', App\Http\Controllers\parte1\Parte1Exercicio8Controller::class);
    Route::get('/exercicio9', App\Http\Controllers\parte1\Parte1Exercicio9Controller::class);
    Route::get('/exercicio10', App\Http\Controllers\parte1\Parte1Exercicio10Controller::class);
    Route::get('/exercicio11', App\Http\Controllers\parte1\Parte1Exercicio11Controller::class);
});

Route::prefix('parte2')->group(function () {
    Route::get('/exercicio1', App\Http\Controllers\parte2\Parte2Exercicio1Controller::class);
    Route::get('/exercicio2', App\Http\Controllers\parte2\Parte2Exercicio2Controller::class);
    Route::get('/exercicio3/{data}', App\Http\Controllers\parte2\Parte2Exercicio3Controller::class);
});
