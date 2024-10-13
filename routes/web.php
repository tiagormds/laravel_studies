<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Olá Mundo!";
});

Route::get('/', [\App\Http\Controllers\MainController::class, 'showView']);
Route::get('/home', [\App\Http\Controllers\MainController::class, 'home']);
