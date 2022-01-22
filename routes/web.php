<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register'])->name('register');
Route::POST('/user-add',[UserController::class,'add'])->name('user.add');
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
Route::get('/user_login',[UserController::class,'user_login'])->name('user_login');
Route::post('/user-view',[UserController::class,'view'])->name('user.view');
Route::post('/user-delete',[UserController::class,'delete'])->name('user.delete');
