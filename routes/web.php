<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])->name('index');;

Route::get('/catalogo', [\App\Http\Controllers\IndexController::class, "catalogo"])->name('catalogo');;

Route::get('/blog', [\App\Http\Controllers\IndexController::class, "blog"])->name('blog');;

Route::get('/about', [\App\Http\Controllers\IndexController::class, "about"])->name('about');;
