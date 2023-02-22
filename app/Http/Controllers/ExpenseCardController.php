<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCard;
use App\Http\Requests\StoreExpenseCardRequest;
use App\Http\Requests\UpdateExpenseCardRequest;

class ExpenseCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expense.card.index');
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
     * @param  \App\Http\Requests\StoreExpenseCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpenseCardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseCard  $expenseCard
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseCard $expenseCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseCard  $expenseCard
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseCard $expenseCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenseCardRequest  $request
     * @param  \App\Models\ExpenseCard  $expenseCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpenseCardRequest $request, ExpenseCard $expenseCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseCard  $expenseCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseCard $expenseCard)
    {
        //
    }
}
