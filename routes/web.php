<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UjiControllers;
use App\Http\Controllers\BookController;

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

Route::middleware('isGuest')->group(function(){
    Route::get ('/register', [UjiControllers::class, 'index']);
    Route::post('/register/auth', [UjiControllers::class, 'store']);
    Route::get('/login', [UjiControllers::class, 'login'])->name('sign.login');
    Route::post('/login/auth', [UjiControllers::class, 'Auth']);
});

Route::middleware(['isLogin', 'checkRole:admin'])->group(function(){
    Route::get('/admin', [UjiControllers::class, 'admin']);
    Route::get('/regis', [UjiControllers::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [UjiControllers::class, 'destroy'])->name('delete');
    Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('delete');
});

Route::get('/logout', [UjiControllers::class, 'logout']);
Route::get('/', [UjiControllers::class, 'landing']);
Route::get('/datauser', [UjiControllers::class, 'dataUser'])->name('dataUser');
Route::get('/create', [UjiControllers::class, 'tambah']);
Route::get('/createBook', [BookController::class, 'create'])->name('tambah.buku');
Route::post('/store', [BookController::class, 'store'])->name('store');