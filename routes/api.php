<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RapatTimController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/meetings',[RapatTimController::class,'index']);
Route::post('/meetings',[RapatTimController::class,'store']);