<?php
if (App::environment('production')) {
    URL::forceScheme('https');
}

use App\Http\Controllers\ActionSupplierController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EanListController;
use App\Http\Controllers\MpnListController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsToImportDataFromSkroutz;
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

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

// register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'createUser'])->name('register');
// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
// logout
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// posts
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'createPost'])->name('posts');

// skroutz
Route::get('/skroutz', function(){
    return view('skroutz.index');
});
// mpn
Route::get('/mpnList',[MpnListController::class, 'index'])->name('mpnList')->middleware('auth');
Route::post('/mpnList',[MpnListController::class, 'insertMpnListToDb'])->name('mpnList')->middleware('auth');
Route::delete('/mpnList/{mpn}', [MpnListController::class, 'delete'])->name('mpnList.delete')->middleware('auth');

// ean
Route::get('/eanList',[EanListController::class, 'index'])->name('eanList')->middleware('auth');
Route::post('/eanList',[EanListController::class, 'insertEanListToDb'])->name('eanList')->middleware('auth');
Route::delete('/eanList/{ean}', [EanListController::class, 'delete'])->name('eanList.delete')->middleware('auth');

// nodejs api
Route::get('/productsToImportDataFromSkroutz', [ProductsToImportDataFromSkroutz::class, 'index'])->name('productsToImportDataFromSkroutz')->middleware('auth');

// action supplier
Route::get('/actionMpnList',[ActionSupplierController::class, 'index'])->name('actionMpnList')->middleware('auth');
Route::post('/actionMpnList',[ActionSupplierController::class, 'insertMpnListToDb'])->name('actionMpnList')->middleware('auth');
Route::delete('/actionMpnList/{mpn}', [ActionSupplierController::class, 'delete'])->name('actionMpnList.delete')->middleware('auth');
