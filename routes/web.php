<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index', [GeneralController::class,'index']) ->name('index');
Route::post('/codigo', [GeneralController::class,'codigo']) ->name('codigo');

