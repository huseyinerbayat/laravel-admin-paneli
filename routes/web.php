<?php

use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/genel-gorunum', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/admin', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/kayit-ol', [AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/sifremi-unuttum', [AdminController::class, 'forgetpassword'])->name('admin.forgetpassword');

Route::post('/admin/login', [MemberController::class, 'login'])->name('admin.login.post');
Route::get('/admin/logout', [MemberController::class, 'logout'])->name('admin.logout');
Route::post('/admin/register', [MemberController::class, 'register'])->name('admin.register.post');

Route::get('/admin/kullanicilar', [UserController::class, 'index'])->name('admin.users.index');