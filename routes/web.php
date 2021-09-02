<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordConfirmController;
use App\Http\Controllers\UserModifyController;
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

Route::get('/', [MainController::class, "index"]);
Route::get('/login', [LoginController::class, "index"]);
Route::get('/confirm', [PasswordConfirmController::class, "index"]);
Route::get('/user/modify', [UserModifyController::class, "index"]);
