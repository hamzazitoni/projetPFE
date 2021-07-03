<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

//Authentication routes
Route::get('auth/login',[EtudiantController::class,'login'])->name('login')->middleware('isLogged');
Route::get('auth/signin',[EtudiantController::class,'signin'])->name('signin')->middleware('isLogged');
Route::post('auth/register',[EtudiantController::class,'register'])->name('register');
Route::post('auth/check',[EtudiantController::class,'check'])->name('check');

//Pages routes
Route::get('/home',[EtudiantController::class,'home'])->name('home')->middleware('isNotLogged');
Route::get('/home/logout',[EtudiantController::class,'logout'])->name('logout')->middleware('isNotLogged');
Route::get('/home/section/{id}',[EtudiantController::class,'getAnSection'])->name('sections')->middleware('isNotLogged');
