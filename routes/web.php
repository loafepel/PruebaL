<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\vistaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});
/*Route::get('/home', function () {
    return view('home');
});*/
//Route::get('/update/{id}', [\App\Http\Controllers\CategoriasController::class, 'tarea']);

Route::resource('tarea', 'App\Http\Controllers\TareaController');
Route::resource('cat', 'App\Http\Controllers\CategoriasController');
Route::resource('vista', 'App\Http\Controllers\VistaController');