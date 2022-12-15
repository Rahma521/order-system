<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth::routes();
Route::get('/',function (){
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles',RoleController::class);
    Route::resource('users',UserController::class);
    Route::resource('orders',OrderController::class);
    Route::resource('services',ServiceController::class);
    
});

    Route::get('/dashboard', [DashboardController::class,'show'])->name('dashboard');

// Users
// Route::get('/users',[UserController::class,'index'])->name('users.index');
// Route::get('/users/create',[UserController::class,'create'])->name('users.create');
// Route::post('/users/create',[UserController::class,'store'])->name('users.store');
// Route::get('/users/{user}', [UserController::class,'edit'])->name('users.edit');
// Route::patch('/users/{user}', [UserController::class,'update'])->name('users.update');
// Route::patch('/users/{user}', [UserController::class,'show'])->name('users.show');
// Route::delete('/users/{id}', [UserController::class,'destroy'])->name('users.destroy');

// Profile
Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
Route::post('/profile', 'ProfileController@update')->name('profile.update');

