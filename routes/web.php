<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;

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


// Routes Generiques

Route::get('/', [HomeController::class, 'welcome'])->name('racine');

Route::prefix('home')->middleware(['auth'])->group(function () {
    Route::resource('posts', PostsController::class);
    Route::resource('users', UsersController::class);
    Route::post('/posts/{post}/like', [PostsController::class, 'like'])->name('posts.like');
    Route::post('/posts/{post}/unlike', [PostsController::class, 'unlike'])->name('posts.unlike');
})->name('home');

Route::prefix('admin')->middleware(['role:admin'])->group(function () {
    // Route::resource('posts', DashbordController::class)->only(['destroy', 'show']);
    Route::resource('users', UsersController::class)->only(['destroy', 'show','index']);
    Route::get('/dashbord-Postes', [DashbordController::class, 'posts'])->name('dashbord.posts');
    Route::get('/dashbord', [DashbordController::class, 'dashboard'])->name('dashbord');
    // Route::get('/dashbord-Utilisateurs', [DashbordController::class, 'users'])->name('dashbord.users');
})->name('dashbord');


// Routes d'Autentification

Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'doLogin']);

Route::get('/reset-password', [AuthController::class, 'reset'])->name('auth.reset');
Route::post('/reset-password', [AuthController::class, 'doReset']);

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'doRegister']);

Route::get('/confirm/{token}', [EmailVerificationController::class, 'resetingEmailVerify'])->name('verify.confirm.email');

Route::get('/confirm', [AuthController::class, 'confirm'])->name('auth.confirm');
Route::post('/confirm', [AuthController::class, 'doConfirm']);

Route::get('/verify-email/{token}', [EmailVerificationController::class, 'registerEmailVerify'])->name('verify.email');


