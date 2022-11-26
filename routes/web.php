<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function(){

    Route::resource('/kategori', KategoriController::class);
    Route::get('deletekategori/{id}', [KategoriController::class, 'destroy'])->name('deletekategori');
    
    Route::resource('/artikel', ArtikelController::class);
    Route::get('deleteartikel/{id}', [ArtikelController::class, 'destroy'])->name('deleteartikel');
    
    // Route::resource('/user', UserController::class);
    // Route::get('deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser');
});

Route::middleware(['auth', 'admin'])->group(function(){
    Route::resource('/user', UserController::class);
    Route::get('deleteuser/{id}', [UserController::class, 'destroy'])->name('deleteuser');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
