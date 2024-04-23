<?php

use Illuminate\Support\Facades\Route;

// Cambia la ruta principal para apuntar a la ruta de inicio de sesión
Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/prueba', function () {
    return view('prueba');
});