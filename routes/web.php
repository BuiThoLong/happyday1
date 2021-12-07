<?php

use App\Http\Controllers\StoreController;
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
Route::get('/category/{id}', [HomeController::class, 'category'])->name('category');
Route::prefix('admin')->group(function () {
    Route::get('resort/create', [StoreController::class, 'create'])->name('create.resort');
    Route::post('resort/create', [StoreController::class, 'insert'])->name('insert.resort');
    Route::get('resort', [StoreController::class, 'store'])->name('store.resort');
    Route::get('resort/{id}/remove', [StoreController::class, 'remove'])->name('remove.resort');
    Route::get('resort/{id}/update', [StoreController::class, 'edit'])->name('edit.resort');
    Route::post('resort/{id}/update', [StoreController::class, 'update'])->name('update.resort');
});