<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('auth.form_login', ['title' => 'Connexion']);
})->name('login');
Route::get("/register",function(){
    return view('auth.form_register',['title'=>'Inscription']);
})->name("register");
Route::post('/dashboard.com', function (Request $request) {
    if ($request->mail === 'lucka@gmail.com' && $request->pass === 'lucka123') {
        return view('dashboard.dash',['title'=> 'Dashboard' ]);
    }
    return back()->with('error', 'Email ou mot de passe incorrect');
})->name('login.check');


