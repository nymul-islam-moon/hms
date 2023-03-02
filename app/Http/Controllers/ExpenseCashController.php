<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCash;
use App\Http\Requests\StoreExpenseCashRequest;
use App\Http\Requests\UpdateExpenseCashRequest;
use App\Models\User;

class ExpenseCashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $expenseCashes = ExpenseCash::latest()->get();
        return view('expense.cash.index', compact('expenseCashes', 'users'));
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
     * @param  \App\Http\Requests\StoreExpenseCashRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpenseCashRequest $request)
    {
        $formData = $request->validated();

        // code generation start

        $code_name = '';

        $objectName = new ExpenseCash();

        if (ExpenseCash::where('id', 1)->first()) {
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

        // Code generation End

        ExpenseCash::create($formData);
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExpenseCash  $expenseCash
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseCash $expenseCash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExpenseCash  $expenseCash
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseCash $expenseCash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenseCashRequest  $request
     * @param  \App\Models\ExpenseCash  $expenseCash
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpenseCashRequest $request, ExpenseCash $expenseCash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseCash  $expenseCash
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseCash $expenseCash)
    {
        //
    }
}
