<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCard;
use App\Http\Requests\StoreExpenseCardRequest;
use App\Http\Requests\UpdateExpenseCardRequest;
use App\Models\Card;

class ExpenseCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();
        $expenseCards = ExpenseCard::all();
        return view('expense.card.index', compact('cards', 'expenseCards'));
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
        $formData = $request->validated();

        $code_name = '';

        // code generate sector

        $objectName = new ExpenseCard();

        if (ExpenseCard::where('id', 1)->first()) {
            $latest_id = $objectName->latest()->first()->id;
            $latest_id = $latest_id + 1;
        } else {
            $latest_id = 1;
        }

        $table_name = $objectName->getTable();
        $name = explode('_', $table_name);


        if(count($name) > 1){
            $code_name = substr($name[0], 0, 3) . '-' . substr($name[1], 0, 3) . '-' . $latest_id;

        }else{
            $code_name = substr($name[0], 0, 3) . '-' . $latest_id;
        }

        $formData['code'] = strtoupper($code_name);

        ExpenseCard::create($formData);
        return back();

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
        $cards = Card::all();
        return view('expense.card.edit', compact('expenseCard', 'cards'));
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
        $formData = $request->validated();

        $expenseCard->update($formData);
        return redirect(route('expense.card.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseCard  $expenseCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseCard $expenseCard)
    {
        $expenseCard->delete();
        return back();
    }
}
