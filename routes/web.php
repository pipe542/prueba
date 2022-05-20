<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/servicios', [App\Http\Controllers\PageController::class, 'servicios'])->name('servicios');
Route::get('/planes', [App\Http\Controllers\PageController::class, 'planes'])->name('planes');
Route::get('/portafolio', [App\Http\Controllers\PageController::class, 'portafolio'])->name('portafolio');
Route::get('/monitoreo', [App\Http\Controllers\PageController::class, 'monitoreo'])->name('monitoreo');
Route::get('/eventos', [App\Http\Controllers\PageController::class, 'eventos'])->name('eventos');
Route::get('/reportes', [App\Http\Controllers\PageController::class, 'reportes'])->name('reportes');
Route::get('/geocercas', [App\Http\Controllers\PageController::class, 'geocercas'])->name('geocercas');

Route::get('/nosotros2', [App\Http\Controllers\PageController::class, 'nosotros2'])->name('nosotros2');
Route::get('/satelital', [App\Http\Controllers\PageController::class, 'satelital'])->name('satelital');


Route::get('/contacto', [App\Http\Controllers\PageController::class, 'contacto'])->name('contacto');    

Route::get('/medios', [App\Http\Controllers\PageController::class, 'medios'])->name('medios');

Route::get('/estadistica', [App\Http\Controllers\PageController::class, 'estadistica'])->name('estadistica');