<?php

use App\Http\Controllers\EstudanteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [EstudanteController::class, 'index']);
