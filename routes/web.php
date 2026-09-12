<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('auth.form_login', ['title' => 'Connexion']);
})->name('login');
Route::get("/register",function(){
    return view('auth.form_register',['title'=>'Inscription']);
})->name("register");


