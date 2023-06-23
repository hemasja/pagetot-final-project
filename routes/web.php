<?php

use App\Http\Controllers\CctvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/cctv', CctvController::class)->name('cctv.list');
Route::get('/cctv/lihat', [CctvController::class, 'monitorCctv'])->name('cctv.monitor');
Route::resource('rooms', RoomController::class);

