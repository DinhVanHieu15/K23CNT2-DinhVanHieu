<?php

use App\Http\Controllers\DvhAccountController;
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

Route::get('/greeting', function () {
    return "<h1>Hello, Tớ là Đinh Văn Hiếu NÈ </h1>";
});
#Redirect
Route::get('/', function () {
    return view('welcome');
});
Route::get('/devmaster', function () {
    return '<h1> heloo, devmaster </h1>';
});
#Redirect
Route::redirect('/here','/there');
Route::get('/there', function () {
    return '<h1> redirect to three </h1>';
});

#Router return view
Route::get('/Dinh-Hieu', function () {
    return view('DinhHieu');
});

#Router  parameter
Route::get('/devmaster/{id}', function ($id) {
    return '<h1>devmaster '.$id;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
    return '<h1> Post: $postId ; Comments: $commentId';
});
#Optional parameter
Route::get('/dev/{nam?}', function ($name="Đinh Hiếu") {
    return '<h1> Xin chào  '.$name;
});


Route::get('/dvh-account',[DvhAccountController::class,'index'])->name('dvhAccount.index');

Route::get('/dvh-account-create',[DvhAccountController::class,'create']);