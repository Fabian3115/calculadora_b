<?php

use App\Http\Controllers\CalculadorController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/calcular', [CalculadorController::class, 'index'])->name('calculadora.index');
Route::post('/calcular/resultado', [CalculadorController::class, 'calcular'])->name('calculadora.calcular');
