<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ControllerProx;
use \App\Http\Controllers\ControllerDell;


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


Route::match(['get', 'post'], '/', [ControllerProx::class, 'show'])->name('home');
Route::match(['get', 'post'], '/del/{id}', [ControllerDell::class, 'destroy'])->name('notes.destroy');

Route::get('register', [\App\Http\Controllers\ControllerUser::class, 'create'])->name('register');
Route::post('register', [\App\Http\Controllers\ControllerUser::class, 'store'])->name('user.store');
Route::post('loginAuth', [\App\Http\Controllers\ControllerUser::class, 'loginAuth'])->name('user.in');
Route::get('login', [\App\Http\Controllers\ControllerUser::class, 'login'])->name('user.login');
Route::get('logout', [\App\Http\Controllers\ControllerUser::class, 'logout'])->name('user.logout');
