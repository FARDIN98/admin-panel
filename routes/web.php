<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::namespace("Admin")->prefix('admin')->group(function(){
//     Route::get('/', 'DashboardController@index')->name('admin.home');
//     Route::namespace('Auth')->group(function(){
//         Route::get('/login','LoginController@showLoginForm')->name('admin.login');
//         Route::post('/login', 'LoginController@login');
//         Route::post('logout', 'LoginController@logout')->name('admin.logout');
//     });
// });

Route::namespace("Admin")->prefix('admin')->group(function() {
    Route::get('/login', 'LoginController@showLoginForm');
});