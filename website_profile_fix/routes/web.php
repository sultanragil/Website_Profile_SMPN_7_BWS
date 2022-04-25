<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false, // Register Routes...

    'reset' => false, // Reset Password Routes...

    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['namespace'=>'Backend'], function () {
    Route::prefix('dashboard')->group(function () {
        Route::resource('/', '\App\Http\Controllers\Backend\IndexController');
        Route::resource('/user', '\App\Http\Controllers\Backend\UserController');

    });
});
