<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout/home');
});
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
// Thêm dòng dưới đây vào
Route::post('/users/create', [App\Http\Controllers\UserController::class, 'store']);

Route::get('/layout/home', [App\Http\Controllers\Homecontroller::class, 'home'])->name("home");

Route::get('/layout/contact', [App\Http\Controllers\Homecontroller::class, 'contact'])->name("contact");

Route::get('/layout/login', [App\Http\Controllers\AuthController::class, 'showlogin'])->name("showlogin");
Route::post('/layout/login', [App\Http\Controllers\AuthController::class, 'login'])->name("login");

Route::get('/layout/sanpham', [App\Http\Controllers\Homecontroller::class, 'sanpham'])->name("sanpham");