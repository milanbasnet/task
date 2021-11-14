<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
})->name('index');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('store.login');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

//password change 
Route::get('/password/change', [PasswordController::class, 'index'])->name('change.password');
Route::post('/password/change', [PasswordController::class, 'store'])->name('change.password');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->name('user.delete');


//eamil verification routes

Route::get('user/verify/{token}', [RegisterController::class, 'verifyEmail'])->name('user.verify');




