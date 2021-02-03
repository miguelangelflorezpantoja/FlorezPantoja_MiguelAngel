<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\presentacion;
use App\Http\Controllers\libros;
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

Route::get('/', [presentacion::class, 'index']) ;


Route::get('libros', [libros::class, 'index'] )->name('listadolibros');


