<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

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
})->name('home');

//การสร้าง Route
Route::get('/about', [AboutController::class,'index'])->name('about')->middleware('check');
Route::get('/member', [MemberController::class,'index'])->name('member');
Route::get('/admin', [AdminController::class,'index'])->name('admin')->middleware('check');





