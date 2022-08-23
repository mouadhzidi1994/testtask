<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/index',['App\Http\Controllers\Clientcontroller','index'])->name('api.index');
Route::get('/index2',[Productcontroller::class,'index'])->name('api.index');
Route::post('/store1',['App\Http\Controllers\Clientcontroller','store'])->name('api.store');
Route::post('/store2',[Productcontroller::class,'store'])->name('api.store');
Route::post('/store3',['App\Http\Controllers\Bookincontroller','store'])->name('api.store');
Route::get('/index3',['App\Http\Controllers\Bookincontroller','index'])->name('api.index');
Route::post('/savewithoutduplication',['App\Http\Controllers\Bookincontroller','storenoduplication'])->name('api.storenoduplication');

