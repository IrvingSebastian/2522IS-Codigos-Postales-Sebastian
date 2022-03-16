<?php

use Illuminate\Support\Facades\Route;

//Controlador
use App\Http\Controllers\GeneralController;
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

//Rutas
Route::get('/', [GeneralController::class,'raiz']) ->name('raiz');
Route::get('/inicio', [GeneralController::class,'inicio']) ->name('inicio');
