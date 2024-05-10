<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])->name('index');;
// Route::get('/catalogo', [\App\Http\Controllers\IndexController::class, "catalogo"])->name('catalogo');;
// Route::get('/blog', [\App\Http\Controllers\IndexController::class, "blog"])->name('blog');;
Route::get('/about', [\App\Http\Controllers\IndexController::class, "about"])->name('about');;
Route::get('/login', [\App\Http\Controllers\IndexController::class, "login"])->name('login');;

//FORMS ABM - BLOG
Route::get('/blog/publicar', [\App\Http\Controllers\BlogController::class, "createForm"])->name('blog.create.form');
Route::post('/blog/publicar', [\App\Http\Controllers\BlogController::class, "createProcess"])->name('blog.create.process');


Route::get('/catalogo', [\App\Http\Controllers\LibroController::class, "catalogo"])->name('catalogo');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, "blog"])->name('blog');

