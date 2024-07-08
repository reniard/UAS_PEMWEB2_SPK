<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\WPController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [UserController::class, 'about'])->name('about');

// Authentication routes using 'AuthController'
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'registerSave'])->name('register.save');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginAction'])->name('login.action');

Route::get('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});

// Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
});

// Alternatif
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif.index');
Route::get('/alternatif/create', [AlternatifController::class, 'create'])->name('alternatif.create');
Route::get('alternatif/{id}/edit', [AlternatifController::class, 'edit'])->name('alternatif.edit');
Route::delete('/alternatif/{id}', [AlternatifController::class, 'destroy'])->name('alternatif.destroy');
Route::post('/alternatif', [AlternatifController::class, 'store'])->name('alternatif.store');
Route::post('/alternatif/store', [AlternatifController::class, 'store'])->name('alternatif.store');
Route::put('alternatif/{id}', [AlternatifController::class, 'update'])->name('alternatif.update');

//Kriteria
Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria.index');
Route::get('kriteria/{id}/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');
Route::put('kriteria/{id}', [KriteriaController::class, 'update'])->name('kriteria.update');
Route::get('/kriteria/create', [KriteriaController::class, 'create'])->name('kriteria.create');
Route::delete('/kriteria/{id}', [KriteriaController::class, 'destroy'])->name('kriteria.destroy');
Route::post('/kriteria', [KriteriaController::class, 'store'])->name('kriteria.store');
Route::post('/kriteria/store', [KriteriaController::class, 'store'])->name('kriteria.store');

//perhitungan
Route::get('/perhitungan', [WPController::class, 'calculateWP'])->name('perhitungan');
Route::get('/calculate-wp', [WPController::class, 'calculateWP'])->name('calculate.wp');
