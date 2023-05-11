<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GracheController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\QrCodeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/booking', [HomeController::class, 'booking'])->name('booking.form');

Route::get('ticket/info', [QrCodeController::class, 'index'])->name('ticket.data');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('Graches', [GracheController::class, 'index'])->name('Grache.index');
    Route::get('Graches/create', [GracheController::class, 'create'])->name('Grache.create');
    Route::post('Graches/store', [GracheController::class, 'store'])->name('Grache.store');

    Route::get('Places', [PlacesController::class, 'index'])->name('Place.index');
    Route::post('Place/store', [PlacesController::class, 'store'])->name('Place.store');

    Route::get('Ticket/index', [BookingController::class, 'index'])->name('Ticket.index');
});

Route::post('getPlaces', [BookingController::class, 'getPlaces'])->name('booking.getPlaces');
Route::post('booking', [BookingController::class, 'store'])->name('booking.store');
