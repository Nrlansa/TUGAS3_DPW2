<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/homePage', function () {
    return view('homePage');
});

Route::get('i/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/Singleproduk', function () {
    return view('Singleproduk');
});

Route::get('tamplate', function () {
    return view('tamplate.base');
});

Route::get('Dashboard', function () {
    return view('tamplate.Section.Dashboard');
});

Route::get('produk', function () {
    return view('tamplate.Section.produk');
});

Route::get('userprofil', function () {
    return view('tamplate.Section.userprofil');
});

Route::get('login', function () {
    return view('tamplate.Section.login');
});

Route::get('daftar', function () {
    return view('tamplate.Section.daftar');
});

Route::get('lupapass', function () {
    return view('tamplate.Section.lupapass');
});