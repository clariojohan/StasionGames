<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/game-details/{id}', 'App\Http\Controllers\GameController@viewGameDetails');
    Route::get('/cart', 'App\Http\Controllers\GameController@viewCart');
    Route::get('/checkout', 'App\Http\Controllers\GameController@viewCheckout');

    Route::get('/account', 'App\Http\Controllers\UserController@viewAccount');
    Route::get('/admin', 'App\Http\Controllers\UserController@viewAdmin');
});

require __DIR__ . '/auth.php';
