<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UjiControllers;

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


Route::get ('/register', [UjiControllers::class, 'index']);
Route::post('/register/auth', [UjiControllers::class, 'store']);
Route::get('/', [UjiControllers::class, 'landing']);
Route::get('/login', [UjiControllers::class, 'login']);
