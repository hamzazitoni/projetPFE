<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\Section2Controller;

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
Route::get('/auth/logout',[EtudiantController::class,'logout'])->name('logout')->middleware('isNotLogged');

//Pages routes
Route::get('/',[Controller::class,'index'])->name('index');
Route::get('/home',[EtudiantController::class,'home'])->name('home')->middleware('isNotLogged');
Route::get('/home/section/{id}',[EtudiantController::class,'section'])->name('sections')->middleware('isNotLogged');

//section2 routes
Route::get('home/section/{id}/cours/exercice1',[Section2Controller::class,'exercice1'])->name('exercice1')->middleware('isNotLogged');
Route::get('home/section/{id}/cours/exercice2',[Section2Controller::class,'exercice2'])->name('exercice2')->middleware('isNotLogged');
Route::get('home/section/{id}/cours/exercice3',[Section2Controller::class,'exercice3'])->name('exercice3')->middleware('isNotLogged');
Route::get('home/section/{id}/cours/exercice4',[Section2Controller::class,'exercice3'])->name('exercice4')->middleware('isNotLogged');

//Administration Pages
Route::get('admin/',[AdminController::class,'adminDashBoard'])->name('adminDashBoard')->middleware('isAdmin');
Route::get('admin/addStudentToCoach',[AdminController::class,'giveACoachToStudent'])->name('addStudentToCoach')->middleware('isAdmin');
Route::post('admin/checkStudentToCoach',[AdminController::class,'checkStudentToCoach'])->name('checkStudentToCoach');
Route::get('admin/addCoach',[AdminController::class,'addACoach'])->name('addACoach')->middleware('isAdmin');
Route::post('admin/checkAddCoach',[AdminController::class,'checkAddCoach'])->name('checkAddCoach');
Route::get('admin/adminConnxion',[AdminController::class,'adminConnxion'])->name('adminConnexion');
Route::post('admin/checkAdminConnxion',[AdminController::class,'checkAdminConnxion'])->name('checkAdminConnxion');
Route::get('admin/logout',[AdminController::class,'logout'])->name('adminLogout')->middleware('isAdmin');
Route::get('admin/delete/{id}',[AdminController::class,'deleteACoach'])->name('deleteACoach')->middleware('isAdmin');


//coach routing pages
Route::get('coach/coachConnexion',[CoachController::class,'coachConnexion'])->name('coachConnexion');
Route::post('coach/checkCoachConnexion',[CoachController::class,'checkCoachConnexion'])->name('checkCoachConnexion');
Route::get('coach/coachDashBoard',[CoachController::class,'coachDashBoard'])->name('coachDashBoard')->middleware('isCoach');
Route::get('coach/logout',[CoachController::class,'coachLogout'])->name('coachLogout')->middleware('isCoach');
