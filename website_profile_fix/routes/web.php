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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes([
    'register' => false, // Register Routes...

    'reset' => false, // Reset Password Routes...

    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/front', function () {
    return redirect('/home');
});

Route::group(['namespace'=>'Backend'], function () {
    Route::prefix('dashboard')->group(function () {
        Route::resource('/', '\App\Http\Controllers\Backend\IndexController');
        Route::resource('/carousel', '\App\Http\Controllers\Backend\CarouselController');
        Route::resource('/pegawai', '\App\Http\Controllers\Backend\PegawaiController');
        //Route::resource('/berita', '\App\Http\Controllers\Backend\BeritaController');
        Route::resource('/sarana', '\App\Http\Controllers\Backend\SaranaController');
        Route::resource('/jabatan', '\App\Http\Controllers\Backend\MatpelController');
        Route::resource('/event', '\App\Http\Controllers\Backend\EventController');
        Route::resource('/data', '\App\Http\Controllers\Backend\DataController');
        Route::resource('/kontak', '\App\Http\Controllers\Backend\KontakController');
        Route::resource('/user', '\App\Http\Controllers\Backend\UserController');
        Route::resource('/profile', '\App\Http\Controllers\Backend\ProfileController');
        Route::resource('/password', '\App\Http\Controllers\Backend\PasswordController');
        Route::resource('/cms', '\App\Http\Controllers\Backend\CMSController');
        Route::resource('/import_data', '\App\Http\Controllers\Backend\ImportExcelController');
        Route::post('profile/update_password', '\App\Http\Controllers\Backend\ProfileController@update_password');
        Route::post('data/delete', '\App\Http\Controllers\Backend\DataController@delete')->name('data.delete');
        //Route::post('data/{search}', '\App\Http\Controllers\Backend\DataController@search')->name('search');
        Route::get('/dashboard', '\App\Http\Controllers\Backend\IndexController@index')->name('dashboard');

    });
});

Route::group(['namespace'=>'Frontend'], function () {
    Route::prefix('/')->group(function () {
        Route::resource('/', '\App\Http\Controllers\Frontend\IndexController');
        Route::resource('/fprofile', '\App\Http\Controllers\Frontend\FProfileController');
        Route::resource('/fkontak', '\App\Http\Controllers\Frontend\FKontakController');
        Route::resource('/fsarpras', '\App\Http\Controllers\Frontend\FSaranaController');
        Route::resource('/fpegawai', '\App\Http\Controllers\Frontend\FPegawaiController');
        Route::resource('/fevent', '\App\Http\Controllers\Frontend\FEventController');
        Route::get('/', '\App\Http\Controllers\Frontend\IndexController@index')->name('homepage');
        Route::get('/fprofile', '\App\Http\Controllers\Frontend\FProfileController@index')->name('profilepage');
        Route::get('/fkontak', '\App\Http\Controllers\Frontend\FKontakController@index')->name('kontakpage');
        Route::get('/fsarpras', '\App\Http\Controllers\Frontend\FSaranaController@index')->name('saranapage');
        Route::get('/fpegawai', '\App\Http\Controllers\Frontend\FPegawaiController@index')->name('pegawaipage');
        Route::get('/fevent', '\App\Http\Controllers\Frontend\FEventController@index')->name('eventpage');   
        Route::get('/fevent/{id}', '\App\Http\Controllers\Frontend\FEventController@show')->name('fevent');  
        Route::get('/fsarpras/{id}', '\App\Http\Controllers\Frontend\FSaranaController@show')->name('fsarpras');

    });
});
