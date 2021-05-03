<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DatatableController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('auth/signup',[AuthController::class, 'getSignup'])->name('auth.signup');
Route::post('auth/post/signup',[AuthController::class, 'postSignUp'])->name('auth.postsignup');
Route::get('auth/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');

Route::get('auth/login',[AuthController::class, 'getLogin'])->name('auth.login');
Route::post('auth/post/login',[AuthController::class, 'postLogin'])->name('auth.postlogin');

Route::get('users', [DatatableController::class, 'getUsers'])->name('get.users');

