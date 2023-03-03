<?php

namespace App\Http\Controllers;

use App\Models\ExpenseMobileBank;
use App\Http\Requests\StoreExpenseMobileBankRequest;
use App\Http\Requests\UpdateExpenseMobileBankRequest;
use App\Models\MobileBank;

class ExpenseMobileBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobiileBank = MobileBank::all();
        $expenseMobileBank = ExpenseMobileBank::all();
        return view('expense.mobile_bank.index', compact('expenseMobileBank', 'mobileBank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExpenseMobileBankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpenseMobileBankRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseMobileBank  $expenseMobileBank
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseMobileBank $expenseMobileBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseMobileBank  $expenseMobileBank
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseMobileBank $expenseMobileBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenseMobileBankRequest  $request
     * @param  \App\Models\ExpenseMobileBank  $expenseMobileBank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpenseMobileBankRequest $request, ExpenseMobileBank $expenseMobileBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseMobileBank  $expenseMobileBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseMobileBank $expenseMobileBank)
    {
        //
    }
}
