<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Backend\HomeController as BackendHomeController;
use App\Http\Controllers\Backend\UserController;

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



Auth::routes();

Route::get('/home', [BackendHomeController::class, 'index'])->name('home');

Route::get('/', [FrontendHomeController::class, 'getAllRepositories'])->name('frontend.get_all_repositories');

// User update
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.config');
    Route::put('/', [UserController::class, 'update'])->name('user.update');
});
