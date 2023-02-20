<?php

use App\Http\Controllers\IncomeCardController;
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


Route::controller(IncomeCardController::class)->prefix('/income/card')->group(function () {
    Route::get('/', 'index')->name('income.card.index');
    Route::post('/', 'store')->name('income.card.store');
    Route::get('/{incomeCard}/edit', 'edit')->name('income.card.edit');
    Route::put('/{incomeCard}/update', 'update')->name('income.card.update');
    Route::delete('/{incomeCard}/destroy', 'destroy')->name('income.card.destroy');
});
