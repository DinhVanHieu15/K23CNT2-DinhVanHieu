<?php

use App\Http\Controllers\ProductController;
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

Route::get('/test', function () {
    return view('test');
});     


Route::get('/',[ProductController::class,'index']);

#view
Route::get('/dvh-view-1',function(){return view('dvh-view-1',['name'=>'devmaster academy!']);});

Route::get('/dvh-view-2',function(){return view('dvh-view-2',['name'=>'Devmaster Academy!','arr'=>[1,4,7,2,9],]);});

Route::get('/dvh-view-3',function(){return view('dvh-view-3 ',['name'=>["devmaster","academy","Hiếu","Đinh"],'arr'=>[10,15,12,1,22,30],'users'=>[],]);});


#Template Blade Layout
Route::get('/home',function(){
    return view('index');
});
Route::get('/about-us',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});