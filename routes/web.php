<?php

use App\Http\Controllers\MemosController;
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

Route::get('/',[MemosController::class,'index'])->name('index');

Route::get('/create',[MemosController::class,'create'])->name('create');
Route::post('/create',[MemosController::class,'store'])->name('store');

Route::get('/edit',[MemosController::class,'edit'])->name('edit');
Route::post('/edit',[MemosController::class,'update'])->name('update');

Route::get('/delete',[MemosController::class,'delete'])->name('delete');
