<?php

use App\Http\Controllers\ClientsController;
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
Route::get('/', [LoginController::class, 'index'])->name('login-index');

Route::prefix('user')->group(function() {

    Route::get('/create', [UsersController::class, 'create'])->name('users-create');
    
    Route::post('/', [UsersController::class, 'store'])->name('users-store');
});

Route::prefix('login')->group(function() {

    Route::post('/', function () {
        $email = request('email');
        $password = request('password');
        return app()->make(LoginController::class)->callAction('authenticate', compact('email', 'password'));
    })->name('login-store');

    Route::get('/destroy', [LoginController::class, 'destroy'])->name('login-destroy');
});

Route::prefix('admin')->group(function() {
    Route::get('/',  [ClientsController::class, 'index'])->name('home-page');

    Route::get('/clients', [ClientsController::class, 'create'])->name('clients-create');

    Route::post('/', [ClientsController::class, 'store'])->name('clients-store');
});

Route::fallback(function() {
    return "Erro!";
});


