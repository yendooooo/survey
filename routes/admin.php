<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\SurveyCategoryController;


Route::prefix("admin")->group(function () {

    Route::get('/', [DashBoardController::class, "index"]);
    Route::get('/category', [SurveyCategoryController::class, "index"]);

});
