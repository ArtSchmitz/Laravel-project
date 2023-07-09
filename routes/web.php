<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'Olá Mundo';
});

Route::get('/series', 
    [SeriesController::class, 'index']
);