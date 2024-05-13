<?php

use Illuminate\Support\Facades\Route;

// Index
Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])
    ->name('index');

Route::get('/about', [\App\Http\Controllers\IndexController::class, "about"])
    ->name('about');

Route::get('/admin', [\App\Http\Controllers\IndexController::class, "admin"])
    ->name('admin')
    ->middleware('auth');

Route::get('/catalogo', [\App\Http\Controllers\LibroController::class, "catalogo"])
    ->name('catalogo');

Route::get('/catalogo/{id}/libro', [\App\Http\Controllers\LibroController::class, "viewBook"])
    ->name('catalogo.view.book')
    ->whereNumber('id');

Route::get('/blog', [\App\Http\Controllers\BlogController::class, "blog"])
    ->name('blog');

Route::get('/blog/{id}/post', [\App\Http\Controllers\BlogController::class, "viewPost"])
    ->name('blog.view.post')
    ->whereNumber('id');

// Blog ABM
Route::get('/blogadm', [\App\Http\Controllers\BlogController::class, "blogadm"])
    ->name('blogadm')
    ->middleware('auth');

Route::get('/blogadm/publicar', [\App\Http\Controllers\BlogController::class, "createForm"])
    ->name('blog.create.form')
    ->middleware('auth');

Route::post('/blogadm/publicar', [\App\Http\Controllers\BlogController::class, "createProcess"])
    ->name('blog.create.process')
    ->middleware('auth');

Route::get('/blogadm/{id}/editar', [\App\Http\Controllers\BlogController::class, "editForm"])
    ->name('blog.edit.form')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/blogadm/{id}/editar', [\App\Http\Controllers\BlogController::class, "editProcess"])
    ->name('blog.edit.process')
    ->whereNumber('id')
    ->middleware('auth');

Route::get('/blogadm/{id}/eliminar', [\App\Http\Controllers\BlogController::class, "deleteForm"])
    ->name('blog.delete.form')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/blogadm/{id}/eliminar', [\App\Http\Controllers\BlogController::class, "deleteProcess"])
    ->name('blog.delete.process')
    ->whereNumber('id')
    ->middleware('auth');

// Libro ABM
Route::get('/libroadm', [\App\Http\Controllers\LibroController::class, "libroadm"])
    ->name('libroadm')
    ->middleware('auth');

Route::get('/libroadm/publicar', [\App\Http\Controllers\LibroController::class, "createForm"])
    ->name('libro.create.form')
    ->middleware('auth');

Route::post('/libroadm/publicar', [\App\Http\Controllers\LibroController::class, "createProcess"])
    ->name('libro.create.process')
    ->middleware('auth');

Route::get('/libroadm/{id}/editar', [\App\Http\Controllers\LibroController::class, "editForm"])
    ->name('libro.edit.form')
    ->whereNumber('id')
    ->middleware('auth');

Route::post('/libroadm/{id}/editar', [\App\Http\Controllers\LibroController::class, "editProcess"])
    ->name('libro.edit.process')
    ->whereNumber('id')
    ->middleware('auth');

Route::get('/libroadm/{id}/eliminar', [\App\Http\Controllers\LibroController::class, "deleteForm"])
    ->name('libro.delete.form')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('auth');

Route::post('/libroadm/{id}/eliminar', [\App\Http\Controllers\LibroController::class, "deleteProcess"])
    ->name('libro.delete.process')
    ->whereNumber('id')
    ->middleware('auth');

// Auth
Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginForm"])
    ->name('auth.login.form');

Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginProcess"])
    ->name('auth.login.process');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, "logoutProcess"])
    ->name('auth.logout.process');





