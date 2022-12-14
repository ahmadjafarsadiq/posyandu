<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImunController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeLoginController;
use App\Http\Controllers\Admin\DashboardController;

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

// tidak harus login terlebih dahulu

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
// Route::get('/detail', [DetailController::class, 'index'])
//     ->name('detail');
// Route::get('/imun', [ImunController::class, 'index'])
//     ->name('imunisasi');

// harus login terlebih dahulu

Route::prefix('/')
    ->middleware(['auth:sanctum', 'user'])
    ->group(function () {
        Route::get('/detail', [DetailController::class, 'index']);
        Route::get('/imun', [ImunController::class, 'index']) ;
        Route::get('/dashboard', [HomeLoginController::class, 'index']);
    });


Route::prefix('/')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function () {
        Route::get('/admin', [DashboardController::class, 'index'])->name('users');
    });



Auth::routes([
    Auth::routes([
        'verify' => true
    ])
]);
