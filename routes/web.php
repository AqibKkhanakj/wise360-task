<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

//Custom Auth login routes:
Route::get('/login', [AuthController::class,'loginShow'])->name('login.show');
Route::post('/login/submit', [AuthController::class,'loginSubmit'])->name('login.submit');
Route::post('/logout', [AuthController::class,'logout'])->name('user.logout');

//Custom Registeration routes
Route::get('/signup', [AuthController::class,'signupShow'])->name('signup.show');
Route::post('/user/signup', [AuthController::class,'userSignup'])->name('user.signup');
//Admin routes
    Route::get('/home', [AuthController::class,'showhome'])->name('home.show');

//Dashboard
Route::get('/dashboard', [DashboardController::class,'showdashboard'])->name('dashboard.show');

//sidebar routes

Route::get('/user/list', [DashboardController::class,'index'])->name('user.show');
Route::get('/user/task', [DashboardController::class,'creatTask'])->name('task.create');
Route::post('/task/submit', [DashboardController::class, 'tasksubmit'])->name('task.submit');
Route::get('/task/list', [DashboardController::class,'tasklist'])->name('tasklist.show');
