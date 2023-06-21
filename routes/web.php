<?php

use App\Http\Controllers\CctvController;
use Illuminate\Support\Facades\Route;

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

Route::get('/cctv', CctvController::class)->name('cctv.list');
Route::get('/cctv/lihat', [CctvController::class, 'monitorCctv'])->name('cctv.monitor');
