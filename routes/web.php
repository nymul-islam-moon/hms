<?php

use App\Http\Controllers\CashController;
use App\Http\Controllers\IncomeCardController;
use App\Http\Controllers\IncomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('/income')->group(function () {

    Route::controller(IncomeController::class)->prefix('/')->group( function () {
        Route::get('/', 'index')->name('income.dashboard.index');
    });

    Route::controller(IncomeCardController::class)->prefix('/card')->group(function () {
        Route::get('/', 'index')->name('income.card.index');
        Route::post('/', 'store')->name('income.card.store');
        Route::get('/{incomeCard}/edit', 'edit')->name('income.card.edit');
        Route::put('/{incomeCard}/update', 'update')->name('income.card.update');
        Route::delete('/{incomeCard}/destroy', 'destroy')->name('income.card.destroy');
    });

    Route::controller(CashController::class)->prefix('/cash')->group(function () {
        Route::get('/', 'index')->name('income.cash.index');
        Route::post('/', 'store')->name('income.cash.store');
        Route::get('/{cash}/edit', 'edit')->name('income.cash.edit');
        Route::put('/{cash}/update', 'update')->name('income.cash.update');
        Route::delete('/{cash}/destroy', 'destroy')->name('income.cash.destroy');
    });


});
