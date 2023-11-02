<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dbconn', function(){
    return view('dbconn');
});

Route::get('/login', function(){
    return view('login');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [adminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [adminAuthController::class, 'postLogin'])->name('adminLoginPost');
 
    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/', function () {
            return view('welcome');
        })->name('admin');
 
    });
});