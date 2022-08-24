<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/cemgas/create', [App\Http\Controllers\cemgasController::class, 'viewForm'])->name('cemgas.register');
Route::get('/cemgas/dashboard', [App\Http\Controllers\cemgasController::class, 'dashboard'])->name('cemgas.dashboard');
Route::post('/cemgas', [App\Http\Controllers\cemgasController::class, 'create'])->name('cemgas.register');

Route::get('/cemats/create', [App\Http\Controllers\cematsController::class, 'viewForm'])->name('cemats.register');
Route::get('/cemats/dashboard', [App\Http\Controllers\cematsController::class, 'dashboard'])->name('cemats.dashboard');
Route::post('/cemats', [App\Http\Controllers\cematsController::class, 'create'])->name('cemats.register');

Route::get('/militaires/create', [App\Http\Controllers\militairesController::class, 'viewForm'])->name('militaires.register');
Route::get('/militaires/dashboard', [App\Http\Controllers\militairesController::class, 'dashboard'])->name('militaires.dashboard');
Route::post('/militaires', [App\Http\Controllers\militairesController::class, 'create'])->name('militaires.register');

