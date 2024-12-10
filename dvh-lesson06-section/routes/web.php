<?php

use App\Http\Controllers\DvhAccountController;
use App\Http\Controllers\DvhSessionController;
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

Route::get('/dvh-session/get',[DvhSessionController::class,'dvhGetSessionData'])->name('dvhsession.get');

Route::get('/dvh-session/set',[DvhSessionController::class,'dvStoreSessionData'])->name('dvhsession.set');

Route::get('/dvh-session/del',[DvhSessionController::class,'dvhDeleteSessionData'])->name('dvhsession.del');

#account
Route::get('/dvh-login',[DvhAccountController::class,'dvhLogin'])->name('dvhaccount.dvhlogin');
