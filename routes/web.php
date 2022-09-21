<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('admindashboard',[DashboardController::class,'index'])->name('adminpanel');
//Route::get('logout',[UserController::class,'logout'])->name('logout');
Route::get('alluser',[UserController::class,'index'])->name('allusers');
Route::get('adduser',[UserController::class,'create'])->name('addusers');


Route::post('userstore',[UserController::class,'store'])->name('userstore');
Route::get('user/{id}/edit',[UserController::class,'edit'])->name('edituser');
Route::put('user/{id}',[UserController::class,'update'])->name('updateuser');
Route::get('user/{id}',[UserController::class,'destory'])->name('deleteuser');

Route::get('activeuser/{id}',[UserController::class,'activeuser'])->name('active');
Route::get('inactive/{id}',[UserController::class,'inactiveuser'])->name('inactive');