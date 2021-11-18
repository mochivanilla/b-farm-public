<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RekomendasiController;
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

Route::get('/', [HomeController::class, 'index']);

Route::post('daftar', [UserController::class, 'register'])->name('user.register');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
Route::post('ulasan', [HomeController::class, 'storeUlasan'])->name('ulasan.store');
Route::get('rekomendasi', [RekomendasiController::class, 'index'])->name('rekomendasi.index');
Route::get('rekomendasi/{id}', [RekomendasiController::class, 'show'])->name('rekomendasi.show');



require __DIR__ . '/auth.php';
