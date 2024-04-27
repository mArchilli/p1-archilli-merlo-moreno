<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])->name('index');;

Route::get('/about', [\App\Http\Controllers\IndexController::class, "about"])->name('about');;
