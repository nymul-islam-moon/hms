<?php

use App\Http\Controllers\BikashController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CashController;
use App\Http\Controllers\ExpenseCardController;
use App\Http\Controllers\ExpenseCashController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ExpenseMobileBankController;
use App\Http\Controllers\IncomeCardController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\IncomeMobileBankController;
use App\Http\Controllers\MobileBankController;
use App\Http\Controllers\TreasureController;
use App\Models\IncomeBikash;
use App\Models\IncomeMobileBank;
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


    Route::controller(IncomeMobileBankController::class)->prefix('/mobilebank')->group(function () {
        Route::get('/', 'index')->name('income.mobilebank.index');
        Route::post('/', 'store')->name('income.mobilebank.store');
        Route::get('/{incomeMobileBank}/edit', 'edit')->name('income.mobilebank.edit');
        Route::put('/{incomeMobileBank}/update', 'update')->name('income.mobilebank.update');
        Route::delete('/{incomeMobileBank}/destroy', 'destroy')->name('income.mobilebank.destroy');
    });



});



// Expense Route

Route::prefix('/expense')->group(function () {



    Route::controller(ExpenseController::class)->prefix('/')->group(function () {
        Route::get('/', 'index')->name('expense.dashboard.index');
        // Route::post('/', 'store')->name('expensestore');
        // Route::get('/{expenseCard}/edit', 'edit')->name('expense.edit');
        // Route::put('/{expenseCard}/update', 'update')->name('expense.card.update');
        // Route::delete('/{expenseCard}/destroy', 'destroy')->name('expense.card.destroy');
    });


    Route::controller(ExpenseCardController::class)->prefix('/card')->group(function () {
        Route::get('/', 'index')->name('expense.card.index');
        Route::post('/', 'store')->name('expense.card.store');
        Route::get('/{expenseCard}/edit', 'edit')->name('expense.card.edit');
        Route::put('/{expenseCard}/update', 'update')->name('expense.card.update');
        Route::delete('/{expenseCard}/destroy', 'destroy')->name('expense.card.destroy');
    });


    Route::controller(ExpenseCashController::class)->prefix('/cash')->group(function () {
        Route::get('/', 'index')->name('expense.cash.index');
        Route::post('/', 'store')->name('expense.cash.store');
        Route::get('/{expenseCash}/edit', 'edit')->name('expense.cash.edit');
        Route::put('/{expenseCash}/update', 'update')->name('expense.cash.update');
        Route::delete('/{expenseCash}/destroy', 'destroy')->name('expense.cash.destroy');
    });

    // Mobile bank Route
    Route::controller(ExpenseMobileBankController::class)->prefix('/mobilebank')->group(function () {
        Route::get('/', 'index')->name('expense.mobilebank.index');
        Route::post('/', 'store')->name('expense.mobilebank.store');
        Route::get('/{expenseMobilebank}/edit', 'edit')->name('expense.mobilebank.edit');
        Route::put('/{expenseMobilebank}/update', 'update')->name('expense.mobilebank.update');
        Route::delete('/{expenseMobilebank}/destroy', 'destroy')->name('expense.mobilebank.destroy');
    });
});


// System Route

Route::prefix('/system')->group(function () {
    Route::controller(MobileBankController::class)->prefix('/mobilebank')->group(function () {
        Route::get('/', 'index')->name('system.mobilebank.index');
        Route::post('/', 'store')->name('system.mobilebank.store');
        Route::get('/{mobilebanksystem}/edit', 'edit')->name('system.mobilebank.edit');
        Route::put('/{mobilebanksystem}/update', 'update')->name('system.mobilebank.update');
        Route::delete('/{mobilebanksystem}/destroy', 'destroy')->name('system.mobilebank.destroy');
    });


    Route::controller(CardController::class)->prefix('/card')->group(function () {
        Route::get('/', 'index')->name('system.card.index');
        Route::post('/', 'store')->name('system.card.store');
        Route::get('/{card}/edit', 'edit')->name('system.card.edit');
        Route::put('/{card}/update', 'update')->name('system.card.update');
        Route::delete('/{card}/destroy', 'destroy')->name('system.card.destroy');
    });
});

// Treasure Route

Route::prefix('/treasure')->group( function () {
    Route::controller(TreasureController::class)->prefix('/treasure')->group(function () {
        Route::get('/', 'index')->name('treasure.index');
        Route::post('/', 'store')->name('treasure.store');
        Route::get('/{treasure}/edit', 'edit')->name('treasure.edit');
        Route::put('/{treasure}/update', 'update')->name('treasure.update');
        Route::delete('/{treasure}/destroy', 'destroy')->name('treasure.destroy');
    });
});
