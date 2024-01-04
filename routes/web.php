<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articulos', [App\Http\Controllers\ArticuloController::class, 'index'])->name('articulos');
Route::post('/articulo/agregar', [App\Http\Controllers\ArticuloController::class, 'store'])->name('agregar-articulo');
Route::post('/articulo/buscar', [App\Http\Controllers\ArticuloController::class, 'show'])->name('buscar-articulo');
Route::post('/articulo/actualizar', [App\Http\Controllers\ArticuloController::class, 'update'])->name('actualizar-articulo');
Route::post('/articulo/borrar', [App\Http\Controllers\ArticuloController::class, 'destroy'])->name('borrar-articulo');