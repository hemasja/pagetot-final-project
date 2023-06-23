<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CctvController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//CCTV Route
Route::get('/cctv', CctvController::class)->name('cctv.list');
Route::get('/cctv/lihat', [CctvController::class, 'monitorCctv'])->name('cctv.monitor');

//Rooms Route
Route::resource('rooms', RoomController::class)->names([
    'index' => 'room.list',
    'show' => 'room.show'
]);

//Inventory Route
Route::get('/inventaris', InventoryController::class)->name('inventaris.list');

//Login & Logout Route
Route::get('/login', UserController::class)->name('login.page');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');

//Dashboard Route
Route::get('/dashboard', AdminController::class)->name('admin.dashboard');