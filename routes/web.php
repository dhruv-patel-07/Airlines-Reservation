<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use Illuminate\Http\Request;
use App\Providers\AppServiceProvider;
use App\Http\Controllers\HomeControoller;
use App\Http\Controllers\Savedata;
use App\Http\Controllers\PDFcontroller;
use App\Http\Controllers\validatecontroller;
// use App\Http\Controllers\validatecontroller;
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
Route::get('/Welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/Home',function () {
    return view('Home');
});
// Route::post('/Home',[validatecontroller::class,'validateForm1']);
// Route::get('/Book',[Home::class,'index']);

// Route::get('/slider', function () {
//     return view('slider');
// });
Route::post('/Book', function () {
    return view('Book');
});
// Route::get('/Book', function () {
//     return view('Book');
// });

Route::get('/Back', function () {
    return view('Home');
});
Route::get("/Book", function () {
    return view('Home');
});

// Route::post('/Pasanger',[validatecontroller::class,'validateForm']);
Route::post('/Pasanger', function () {
    return view('Pasanger');
});
Route::get('/Pasanger', function () {
    return view('Pasanger');
})->middleware('auth');

Route::get('/Payment', function () {
    return view('Payment');
})->middleware('auth'); 

// Route::post('/Payment',[validatecontroller::class,'validateForm']);
// Route::post('/Pasanger',[HomeControoller::class,'val']);
Route::post('/Payment', function () {
    return view('Payment');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// for Logout in page
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('/Confirm',[Savedata::class,'addData']);
Route::get('/Confirm', function () {
    return view('Confirm');
})->middleware('auth'); 

Route::post('/ticket/{id}',[PDFcontroller::class,'genratepdf']);
Route::get('/get',[HomeControoller::class,'data']);
Route::get('/Custom',function (){
    return view('get');
});
