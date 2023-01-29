<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ControllPanelController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard-filter/{id}', [HomeController::class, 'index'])->name('index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/index-company', [CompanyController::class, 'index'])->name('index-company');
    Route::post('/store-company', [CompanyController::class, 'store'])->name('store-company');


    Route::get('/controll-panel', [ControllPanelController::class, 'index'])->name('controll-panel');
    Route::get('/create-category', [ControllPanelController::class, 'create'])->name('create-category');
    Route::post('/store-category', [ControllPanelController::class, 'store'])->name('store-category');

    Route::get('/index-job/{company}', [JobController::class, 'index'])->name('index-job');
    Route::post('/store-job/{company}', [JobController::class, 'store'])->name('store-job');
    Route::get('/show-job/{id}', [JobController::class, 'show'])->name('show-job');
    Route::get('/user-job/{id}', [JobController::class, 'user_job'])->name('user-job');
    Route::get('/cancel-user-job/{id}', [JobController::class, 'cancel_user_job'])->name('cancel-user-job');
});

require __DIR__.'/auth.php';

