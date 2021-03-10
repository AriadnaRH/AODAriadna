<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\ConsoleController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
        'vehicles'=> VehicleController::class,
        'computers'=> ComputerController::class,
        'phones'=> PhoneController::class,
        'tvs'=> TvController::class,
        'consoles'=> ConsoleController::class,
]);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
