<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\SurveyCategoryController;
use App\Http\Controllers\SettingMenuListController;


Route::prefix("admin")->group(function () {
    Route::get('/', [DashBoardController::class, "index"]);
    Route::get('/category', [SurveyCategoryController::class, "index"]);
    Route::get('/setting/menu', [SettingMenuListController::class, "index"]);
    Route::post('/setting/menu', [SettingMenuListController::class, "store"]);
});
