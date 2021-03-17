<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
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


Route::get('/',[RecetaController::class,'index'])->name('index');
Route::post('/',[RecetaController::class,'store'])->name('save');
Route::get('eliminar/{id}',[RecetaController::class,'destroy'])->name('destroy');
Route::get('ver/{id}',[RecetaController::class,'show'])->name('ver');
Route::get('editar/{id}',[RecetaController::class,'edit'])->name('editar');
Route::post('update/{id}',[RecetaController::class,'update'])->name('update');
