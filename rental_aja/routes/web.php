<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
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


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', [ViewController::class, 'viewIndex'])->name('index');

Route::get('/about-us', [ViewController::class, 'viewAboutUs'])->name('about-us');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/game-details/{id}', [ViewController::class, 'viewGameDetails'])->name('game-details');
    Route::get('/cart', [ViewController::class, 'viewCart'])->name('cart');
    Route::get('/checkout', [ViewController::class, 'viewCheckout'])->name('checkout');

    Route::get('/account', [ViewController::class, 'viewAccount'])->name('account');
    Route::get('/admin', [ViewController::class, 'viewAdmin'])->name('admin');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

require __DIR__ . '/auth.php';
