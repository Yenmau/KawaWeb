<?php

use App\Http\Controllers\Cabout;
use App\Http\Controllers\Cdashboard;
use App\Http\Controllers\Chome;
use App\Http\Controllers\Clogin;
use App\Http\Controllers\Cproduct;
use App\Http\Controllers\Cdetail;
use App\Http\Controllers\Cregis;
use App\Http\Controllers\Cregister;
use Illuminate\Contracts\Filesystem\Cloud;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::resource('home',Chome::class);
Route::resource('property',Cproduct::class);
Route::resource('about',Cabout::class);
Route::resource('login',Clogin::class);
Route::resource('regis',Cregis::class);
Route::resource('detail',Cdetail::class);
Route::resource('dashboard',Cdashboard::class);

Route::post('login/proses', [Clogin::class, 'login']);
Route::get('logout', [Clogin::class, 'logout']);

Route::get('/register', [Cregister::class, 'showForm'])->name('register.form');
Route::post('/register', [Cregister::class, 'register'])->name('register.submit');
