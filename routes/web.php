<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/details',function(){
    return view('home.detailpage');
});

// Route::get('/login',function(){
//     return view('page.login');
// })->name('login');

// Route::get('/register',function(){
//     return view('page.register');
// })->name('register');


Route::get('login',[LoginController::class,'showLogin'])->name('login');
Route::post('loginuser',[LoginController::class,'loginUser'])->name('loginUser');

Route::delete('logoutuser',[LoginController::class,'logout'])->name('logout');

Route::get('register',[RegisterController::class,'showRegister'])->name('register');
Route::post('registeruser',[RegisterController::class,'registerUser'])->name('registerUser');

