<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokeDataController;
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

Route::get('/', [StokeDataController::class, 'index'])->name('index');
Route::get('/create', [StokeDataController::class, 'create'])->name('create');
Route::post('/store', [StokeDataController::class, 'store'])->name('store');
Route::get('/edit/{id}', [StokeDataController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [StokeDataController::class, 'update'])->name('update');
Route::post('/delete/{id}', [StokeDataController::class, 'delete'])->name('delete');
