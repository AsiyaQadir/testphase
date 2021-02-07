<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::view('/addstaff','addstaff');
Route::post("addstaff",[StaffController::class,'addStaff']);


Route::view('/viewmechanic','viewmechanic');
Route::get("viewmechanic",[StaffController::class,'viewMechanic']);

Route::view('/stationlist','stationlist');
Route::get("station",[UserController::class,'searchStation']);

