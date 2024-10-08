<?php

use Illuminate\Support\Facades\Route;

// Index
Route::get('/', [\App\Http\Controllers\IndexController::class, "index"])
    ->name('index');

Route::get('/about', [\App\Http\Controllers\IndexController::class, "about"])
    ->name('about');

Route::get('/admin', [\App\Http\Controllers\IndexController::class, "admin"])
    ->name('admin')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::get('/catalogo', [\App\Http\Controllers\LibroController::class, "catalogo"])
    ->middleware('auth')
    ->name('catalogo');

Route::get('/catalogo/{id}/libro', [\App\Http\Controllers\LibroController::class, "viewBook"])
    ->name('catalogo.view.book')
    ->middleware('auth')
    ->whereNumber('id');

Route::get('/blog', [\App\Http\Controllers\BlogController::class, "blog"])
    ->middleware('auth')
    ->name('blog');

Route::get('/blog/{id}/post', [\App\Http\Controllers\BlogController::class, "viewPost"])
    ->name('blog.view.post')
    ->middleware('auth')
    ->whereNumber('id');

// Blog ABM
Route::get('/blogadm', [\App\Http\Controllers\BlogController::class, "blogadm"])
    ->name('blogadm')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::get('/blogadm/publicar', [\App\Http\Controllers\BlogController::class, "createForm"])
    ->name('blog.create.form')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::post('/blogadm/publicar', [\App\Http\Controllers\BlogController::class, "createProcess"])
    ->name('blog.create.process')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::get('/blogadm/{id}/editar', [\App\Http\Controllers\BlogController::class, "editForm"])
    ->name('blog.edit.form')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::post('/blogadm/{id}/editar', [\App\Http\Controllers\BlogController::class, "editProcess"])
    ->name('blog.edit.process')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::get('/blogadm/{id}/eliminar', [\App\Http\Controllers\BlogController::class, "deleteForm"])
    ->name('blog.delete.form')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::post('/blogadm/{id}/eliminar', [\App\Http\Controllers\BlogController::class, "deleteProcess"])
    ->name('blog.delete.process')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

// Libro ABM
Route::get('/libroadm', [\App\Http\Controllers\LibroController::class, "libroadm"])
    ->name('libroadm')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::get('/libroadm/publicar', [\App\Http\Controllers\LibroController::class, "createForm"])
    ->name('libro.create.form')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::post('/libroadm/publicar', [\App\Http\Controllers\LibroController::class, "createProcess"])
    ->name('libro.create.process')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::get('/libroadm/{id}/editar', [\App\Http\Controllers\LibroController::class, "editForm"])
    ->name('libro.edit.form')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::post('/libroadm/{id}/editar', [\App\Http\Controllers\LibroController::class, "editProcess"])
    ->name('libro.edit.process')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::get('/libroadm/{id}/eliminar', [\App\Http\Controllers\LibroController::class, "deleteForm"])
    ->name('libro.delete.form')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::post('/libroadm/{id}/eliminar', [\App\Http\Controllers\LibroController::class, "deleteProcess"])
    ->name('libro.delete.process')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

// Users routes

Route::get('/usersadm', [\App\Http\Controllers\AuthController::class, "usersadm"])
    ->name('usersadm')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::get('/usersadm/{id}/editar', [\App\Http\Controllers\AuthController::class, "editForm"])
    ->name('user.edit.form')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::post('/usersadm/{id}/editar', [\App\Http\Controllers\AuthController::class, "editProcess"])
    ->name('user.edit.process')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::get('/usersadm/{id}/eliminar', [\App\Http\Controllers\AuthController::class, "deleteForm"])
    ->name('user.delete.form')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

Route::post('/usersadm/{id}/eliminar', [\App\Http\Controllers\AuthController::class, "deleteProcess"])
    ->name('user.delete.process')
    ->whereNumber('id')
    ->middleware('auth')
    ->middleware('check-admin-rol');

// Auth
Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginForm"])
    ->name('auth.login.form');

Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, "loginProcess"])
    ->name('auth.login.process');

Route::post('/cerrar-sesion', [\App\Http\Controllers\AuthController::class, "logoutProcess"])
    ->name('auth.logout.process');

Route::get('/crear-cuenta', [\App\Http\Controllers\AuthController::class, "registerForm"])
    ->name('auth.register.form');

Route::post('/crear-cuenta', [\App\Http\Controllers\AuthController::class, "registerProcess"])
    ->name('auth.register.process');

Route::get('/redirect-after-login', function () {
        // Esta ruta solo redirige basándose en el rol
        return redirect()->route('index');  // Puedes tener una vista simple indicando que está redirigiendo
    })->middleware(['auth', 'check-user-rol'])->name('redirect.after.login');





