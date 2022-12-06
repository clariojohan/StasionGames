<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CartController;

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

Route::resource('games', GameController::class);

Route::get('/', [GameController::class, 'index'])->name('index');

Route::get('/about-us', [ViewController::class, 'viewAboutUs'])->name('about-us');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/account', [UserController::class, 'viewAccount'])->name('account');
    Route::patch('/account', [UserController::class, 'editAvatar'])->name('edit-avatar');

    Route::get('/admin', [UserController::class, 'viewAdmin'])->name('admin');


    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    Route::resource('carts', CartController::class);
});


require __DIR__ . '/auth.php';
