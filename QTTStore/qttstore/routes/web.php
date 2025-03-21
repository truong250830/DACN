<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Hash;
Route::get('/login', [AuthController::class, 'ShowLogin'])->name('showlogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/register', [AuthController::class, 'showRegister'])->name('showregister');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/', [HomeController::class, 'getTrangChinh'])->name('homepage');
// Route::get('/home', function() {
//     if (!session('email') || session('role') !== 'user') {
//         return redirect()->route('login')->with('error', 'Bạn không có quyền truy cập!');
//     }
//     return view('frontend.home');
// })->name('user');

// Route Dashboard dành cho Admin
// Route::get('/dashboard', function() {
//     if (!session('email')) {
//         return redirect()->route('login')->with('error', 'Bạn không có quyền truy cập!');
//     }
//     return view('frontend.dashboard');
// })->name('admin');
