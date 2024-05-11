<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])->name('index');
// Route::get('/catalogo', [\App\Http\Controllers\IndexController::class, "catalogo"])->name('catalogo');
// Route::get('/blog', [\App\Http\Controllers\IndexController::class, "blog"])->name('blog');
Route::get('/about', [\App\Http\Controllers\IndexController::class, "about"])->name('about');
Route::get('/login', [\App\Http\Controllers\IndexController::class, "login"])->name('login');
Route::get('/admin', [\App\Http\Controllers\IndexController::class, "admin"])->name('admin');

Route::get('/catalogo', [\App\Http\Controllers\LibroController::class, "catalogo"])->name('catalogo');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, "blog"])->name('blog');

//FORMS ABM - BLOG
Route::get('/blogadm', [\App\Http\Controllers\BlogController::class, "blogadm"])->name('blogadm');

Route::get('/blogadm/publicar', [\App\Http\Controllers\BlogController::class, "createForm"])->name('blog.create.form');
Route::post('/blogadm/publicar', [\App\Http\Controllers\BlogController::class, "createProcess"])->name('blog.create.process');

Route::get('/blogadm/{id}/editar', [\App\Http\Controllers\BlogController::class, "editForm"])->name('blog.edit.form')->whereNumber('id');
Route::post('/blogadm/{id}/editar', [\App\Http\Controllers\BlogController::class, "editProcess"])->name('blog.edit.process')->whereNumber('id');

Route::get('/blogadm/{id}/eliminar', [\App\Http\Controllers\BlogController::class, "deleteForm"])->name('blog.delete.form')->whereNumber('id');
Route::post('/blogadm/{id}/eliminar', [\App\Http\Controllers\BlogController::class, "deleteProcess"])->name('blog.delete.process')->whereNumber('id');
//FORMS ABM - BLOG

//FORMS ABM - LIBRO
Route::get('/libroadm', [\App\Http\Controllers\LibroController::class, "libroadm"])->name('libroadm');

Route::get('/libroadm/publicar', [\App\Http\Controllers\LibroController::class, "createForm"])->name('libro.create.form');

//FORMS ABM - LIBRO






