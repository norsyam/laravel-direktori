<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\KawalController;
use App\Http\Controllers\API\ApiPersonelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(KawalController::class)->group(function(){
    Route::post('login', 'login');
    Route::post('logout', 'logout');
});

Route::controller(ApiPersonelController::class)->group(function(){
    Route::post('personel', 'personel')->middleware('auth:sanctum');
    Route::get('personel-list', 'personel_list');
    Route::post('personel-luar', 'personel_luar');
    Route::get('personel-luar-list', 'personel_luar_list');
});

