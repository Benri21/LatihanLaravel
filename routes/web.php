<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrameworkController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about',[FrameworkController::class, 'getAbout']);
Route::get('/mahasiswa',[FrameworkController::class, 'getMahasiswa']);