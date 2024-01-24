<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahagianController;
use App\Http\Controllers\DirektoriController;
use App\Http\Controllers\DirektoriAwamController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'bahagian' => BahagianController::class,
    'direktori' => DirektoriController::class,
]);

Route::controller(DirektoriAwamController::class)->prefix("direktori-awam")->group(function () {
    Route::get('bahagian', 'bahagian')->name('direktori-awam.bahagian');
    Route::get('direktori', 'direktori')->name('direktori-awam.direktori');
});

