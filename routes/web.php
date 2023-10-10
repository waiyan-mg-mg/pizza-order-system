<?php

use App\Http\Controllers\AuthControllerController;
use App\Models\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// login
Route::redirect('/', 'loginPage');
Route::get('/loginPage', [AuthControllerController::class, 'loginPage'])->name('#login');
// register
Route::get('/registerPage', [AuthControllerController::class, 'registerPage'])->name("#register");
