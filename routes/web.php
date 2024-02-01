<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Opdracht;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/Opdracht', [Opdracht::class, 'index']);
Route::post('RevForm', [IndexController::class, 'RevieuwForm']);
Route::post('sendMail', [IndexController::class, 'sendMail']);

Route::post('RevFormC', [Opdracht::class, 'Create']);
Route::post('RevFormCC', [Opdracht::class, 'CreateC']);
Route::post('RevFormU', [Opdracht::class, 'Update']);
Route::post('RevFormUC', [Opdracht::class, 'UpdateC']);
Route::post('RevFormD', [Opdracht::class, 'Delete']);
Route::post('RevFormDC', [Opdracht::class, 'DeleteC']);

Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::Post('StatusVeranderen',[AdminDashboardController::class, 'StatusVeranderen'] )->middleware(['auth', 'verified'])->name('dashboard');
Route::Post('GoedKeuren',[AdminDashboardController::class, 'GoedKeuren'] )->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
