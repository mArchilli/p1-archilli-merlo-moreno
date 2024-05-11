<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])->name('index');
// Route::get('/catalogo', [\App\Http\Controllers\IndexController::class, "catalogo"])->name('catalogo');
// Route::get('/blog', [\App\Http\Controllers\IndexController::class, "blog"])->name('blog');
Route::get('/about', [\App\Http\Controllers\IndexController::class, "about"])->name('about');
// Route::get('/login', [\App\Http\Controllers\IndexController::class, "login"])->name('login');
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
Route::post('/libroadm/publicar', [\App\Http\Controllers\LibroController::class, "createProcess"])->name('libro.create.process');

Route::get('/libroadm/{id}/editar', [\App\Http\Controllers\LibroController::class, "editForm"])->name('libro.edit.form')->whereNumber('id');
Route::post('/libroadm/{id}/editar', [\App\Http\Controllers\LibroController::class, "editProcess"])->name('libro.edit.process')->whereNumber('id');

Route::get('/libroadm/{id}/eliminar', [\App\Http\Controllers\LibroController::class, "deleteForm"])->name('libro.delete.form')->whereNumber('id');
Route::post('/libroadm/{id}/eliminar', [\App\Http\Controllers\LibroController::class, "deleteProcess"])->name('libro.delete.process')->whereNumber('id');

//FORMS ABM - LIBRO

// Rutas de autenticación
Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginForm"])->name('auth.login.form');
Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginProcess"])->name('auth.login.process');
Route::get('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, "logoutProcess"])->name('auth.logout.process');





