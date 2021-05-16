<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Middleware\agecheck;

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
Route::post('con',[usercontroller::class,'show']);
Route::get('load',[usercontroller::class,'load']);
Route::get('select',[usercontroller::class,'select']);
Route::get('form', function () {
    return view('form');
});
Route::view('user','users')->middleware('protectedPage');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
