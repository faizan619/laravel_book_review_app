<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/details',function(){
    return view('home.detailpage');
});

Route::get('/login',function(){
    return view('page.login');
})->name('login');

Route::get('/register',function(){
    return view('page.register');
})->name('register');


Route::resource('user',UserController::class);

Route::get('/loginuser',[UserController::class,'loginuser'])->name('loginuser');
