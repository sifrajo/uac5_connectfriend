<?php

use App\Http\Controllers\FriendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/register', function () {
    return view('register');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/register', [LoginController::class, 'store']);
Route::post('/payment', [LoginController::class, 'payment']);
Route::post('/login', [LoginController::class, 'login']);

Route::group(['prefix' => 'casual', 'middleware' => 'CheckCasual'], function(){

    Route::get(('/'), [UserController::class, 'casualidx']);
    // Route::get(('/'), [UserController::class, 'casualidx']);
    Route::put('/top-up', [UserController::class, 'topup']);
    Route::post('/like', [FriendController::class, 'like']);
    Route::post('/dislike', [FriendController::class, 'dislike']);
    Route::get('/friend', [UserController::class, 'friend']);
    Route::post('/friend', [UserController::class, 'friend']);
});
