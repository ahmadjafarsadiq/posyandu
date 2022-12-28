<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImunController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class, 'index']);
// Route::get('/detail', [DetailController::class, 'index'])
//     ->name('detail');
// Route::get('/imun', [ImunController::class, 'index'])
//     ->name('imunisasi');

// harus login terlebih dahulu

// Route::middleware(['auth:sanctum', 'users'])
//     ->group(function () {
//         Route::get('/detail', [DetailController::class, 'index']);
//         Route::get('/imun', [ImunController::class, 'index']);
//         Route::get('/home', [HomeLoginController::class, 'index']);
//     });

Route::get('/detail', [DetailController::class, 'index'])->middleware(['auth', 'verifed'])->name('user.detail');
Route::get('/imun', [ImunController::class, 'index'])->middleware(['auth', 'verified'])->name('user.imunisasi');
Route::get('/home', [HomeLoginController::class, 'index'])->name('user.home');

Route::prefix('/')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function () {
        Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
    });


Route::controller(ProfileController::class)->prefix('profile')->name('profile.')->group(function () {
    Route::get('profile', 'index')->name('profile.index');
    Route::patch('update/{id}', 'update')->name('profile.update');
});

Auth::routes(['verify' => true]);
Auth::routes();

// Route::get('/email/verify/{id}/{hash}', [VerifyEmailController:: {

//     return redirect('/dashboard');
// })->middleware(['auth', 'signed'])->name('verification.verify');
// //     [DashboardController::class, 'index'])->name('users');
//  } 
