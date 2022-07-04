<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\QueriesController;
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

// Route::get('/', function () {  return view('welcome');});

Route::get('/', [UploadController::class,'index']);

Route::get('/list', function () {  return view('list');})->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/message',[QueriesController::class,'store']);


Route::resource('Upload', UploadController::class);
Route::get('/selecteditem/{Room_id}',[UploadController::class,'viewSelectedItem']);
