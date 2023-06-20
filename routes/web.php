<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'show']);

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('login/auth',[UserController::class,'auth']);
Route::get('logout',[UserController::class,'logout']);

Route::middleware('auth')->group(function(){
    
    Route::get('template', function () {
        return view('template');
    });
    Route::get('profil',[ProfilController::class,'show']);
    Route::get('profil',[ProfilController::class,'profil']);
    Route::post('profil/create',[ProfilController::class,'create']);
    Route::get('profil/edit/{id}',[ProfilController::class,'edit']);
    Route::post('profil/update/{id}',[ProfilController::class,'update']);
    
    Route::get('portofolio',[PortofolioController::class,'show']);
    Route::get('portofolio/add',[PortofolioController::class,'add']);
    Route::post('portofolio/create',[PortofolioController::class,'create']);
    Route::get('portofolio/delete/{id}',[PortofolioController::class,'delete']);
    Route::get('portofolio/edit/{id}',[PortofolioController::class,'edit']);
    Route::post('portofolio/update/{id}',[PortofolioController::class,'update']);

});
Route::get('contact',[ContactController::class,'show']);
Route::get('contact/add',[ContactController::class,'add']);
Route::post('contact/create',[ContactController::class,'create']);
Route::get('contact/delete/{id}',[ContactController::class,'delete']);