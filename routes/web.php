<?php

use Illuminate\Support\Facades\Route;

// Ruta inicial por defecto es /home

Route::get('/', function () {
    return Redirect::to( '/home');
});

//hide routes reigister, reset, verify, and change route /login to /cesarlogin for security in auth laravel

Auth::routes([
    'register' => false,
    'verify' => false, 
    'login' => false,  
    'reset' => false,
]);

Route::get('/cesarlogin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::post('/cesarlogin', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.submit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//about
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

//projects
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');

//contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

//tech
Route::get('/tech', [App\Http\Controllers\TechController::class, 'index'])->name('tech');

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/mail', function () {
    return view('emails.mensaje-portafolio');
});