<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('daftar', [UserController::class, 'register'])->name('user.register');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');
});

require __DIR__.'/auth.php';
