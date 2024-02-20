<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
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


Route::prefix('user')->group(function() {

    Route::get('/create', [UsersController::class, 'create'])->name('users-create');
    
    Route::post('/', [UsersController::class, 'store'])->name('users-store');
});

Route::prefix('login')->group(function() {
    Route::get('/', [LoginController::class, 'index'])->name('login-index');

    Route:: post('/', [LoginController::class, 'authenticate'])->name('login-store');

    Route::get('/destroy', [LoginController::class, 'destroy'])->name('login-destroy');
});

Route::fallback(function() {
    return "Erro!";
});


