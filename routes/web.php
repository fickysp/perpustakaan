<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

//default
Route::get('/', function () {
    return view('login');
});

//auth
Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login'])->name('login');
//dashboard
Route::resource('dashboard', DashboardController::class);
//kategori buku
Route::resource('category', CategoryController::class);
Route::resource('book', BooksController::class);
//peminjaman
Route::resource('pinjam', PinjamController::class);
Route::get('getBuku/{category_id}', [AjaxController::class, 'getDataBuku']);



// berisi method get, post, put, delete
Route::resource('belajar', BelajarController::class);
Route::get('tambah', [BelajarController::class, 'tambah'])->name('tambah');
Route::resource('user', UserController::class);
Route::post('store_tambah', [BelajarController::class, 'storeTambah'])->name('store_tambah');




