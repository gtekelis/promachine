<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//root
Route::get('/', function () {
//    return view('welcome');
    return view('home');
});

//home
Route::get('/home', function () {
    return view('home');
});

//test
Route::get('/test', function(){
    return view('test',[
        'name' => request('name'),
        'surname' => request('surname')
    ]);
});

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

//register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'createUser'])->name('register');
//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
//logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

//posts
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'createPost'])->name('posts');

//skroutz
Route::get('/skroutz', function(){
    return view('skroutz.index');
});
