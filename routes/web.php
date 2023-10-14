<?php

use App\Http\Controllers\AuthControllerController;
use App\Http\Controllers\CategoryController;
use App\Models\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::redirect('dashboard', '/');
// login
Route::redirect('/', 'loginPage');
Route::get('/loginPage', [AuthControllerController::class, 'loginPage'])->name('#login');
// register
Route::get('/registerPage', [AuthControllerController::class, 'registerPage'])->name("#register");

// admin list
Route::get('/category/list', [CategoryController::class,'list']);
