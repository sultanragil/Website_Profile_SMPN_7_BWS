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
        Route::resource('/carousel', '\App\Http\Controllers\Backend\CarouselController');
        Route::resource('/pegawai', '\App\Http\Controllers\Backend\PegawaiController');
        Route::resource('/berita', '\App\Http\Controllers\Backend\BeritaController');
        Route::resource('/sarana', '\App\Http\Controllers\Backend\SaranaController');
        Route::resource('/matpel', '\App\Http\Controllers\Backend\MatpelController');
        Route::resource('/event', '\App\Http\Controllers\Backend\EventController');
        Route::resource('/data', '\App\Http\Controllers\Backend\DataController');
        Route::resource('/kontak', '\App\Http\Controllers\Backend\KontakController');
        Route::resource('/user', '\App\Http\Controllers\Backend\UserController');
        Route::resource('/profile', '\App\Http\Controllers\Backend\ProfileController');
        Route::resource('/password', '\App\Http\Controllers\Backend\PasswordController');
        Route::post('profile/update_password', '\App\Http\Controllers\Backend\ProfileController@update_password');
    });
});
