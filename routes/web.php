<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Olá Mundo!";
});

Route::get('/', [\App\Http\Controllers\MainController::class, 'showView']);
Route::get('/home', [\App\Http\Controllers\MainController::class, 'home']);
Route::get('/login', [\App\Http\Controllers\MainController::class, 'login']);
Route::post('/ssubmit', [\App\Http\Controllers\MainController::class, 'submitForm'])->name('ssubmit');
