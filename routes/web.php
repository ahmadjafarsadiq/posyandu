<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImunController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\resendcontroller;
use App\Http\Controllers\Admin\PendaftaranPosyanduBalitaController;

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
Route::get('/detail', [DetailController::class, 'index'])->middleware(['auth', 'verified'])->name('detail');
Route::get('/detailimun', [ImunController::class, 'index'])->middleware(['auth', 'verified'])->name('imunisasi');
Route::get('/home', [HomeLoginController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->middleware(['auth', 'verified'])->name('about');

Route::prefix('/')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('Pendaftaran', PendaftaranPosyanduBalitaController::class);
    });

Route::get('/resend', [resendcontroller::class, 'show'])->name('resend');
Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Route
     */
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

Route::get('/formpos', [FormController::class, 'formposyandu'])->middleware(['auth', 'verified'])->name('form');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::put('/profile/{users}', [ProfileController::class, 'update'])->name('update');





Auth::routes(['verify' => true]);


// Route::get('/email/verify/{id}/{hash}', [VerifyEmailController:: {

//     return redirect('/dashboard');
// })->middleware(['auth', 'signed'])->name('verification.verify');
// //     [DashboardController::class, 'index'])->name('users');
//  } 
