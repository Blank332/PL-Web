<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

// Menampilkan formulir login petugas
Route::get('/login', 'PetugasController@showLoginForm')->name('login');

// Mengelola proses login petugas
Route::post('/login', 'PetugasController@login')->name('login.post');


Route::get('/dashboard', function () {
    return view('dashboard');
});
