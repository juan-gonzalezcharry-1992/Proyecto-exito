<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class)->name('inicio');


Route::get('estibas',[ HomeController::class, 'estibas'])->name('estibas');

Route::get('formaletas',[ HomeController::class, 'formaletas'])->name('formaletas');

Route::get('huacales',[ HomeController::class, 'huacales'])->name('huacales');

Route::get('secado',[ HomeController::class, 'secado'])->name('secado');