<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::prefix('customer')->group(function (){
    Route::get('/',[CustomerController::class,'index'])->name('customer.index');
    Route::get('/create',[CustomerController::class,'create'])->name('customer.create');
    Route::get('/{id}/delete',[CustomerController::class,'delete'])->name('customer.delete');
    Route::post('/create',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/{id}/edit',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/{id}/edit',[CustomerController::class,'update'])->name('customer.update');
});
