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
        $mobileBanks = MobileBank::all();
        $expenseMobileBanks = ExpenseMobileBank::all();
        return view('expense.mobile_bank.index', compact('expenseMobileBanks', 'mobileBanks'));
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
        $formData = $request->validated();

        // code generation start

        $code_name = '';

        $objectName = new ExpenseMobileBank();

        if (ExpenseMobileBank::where('id', 1)->first()) {
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

        ExpenseMobileBank::create($formData);
        return back();
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
        $mobileBanks = MobileBank::all();
        return view('expense.mobile_bank.edit', compact('expenseMobileBank', 'mobileBanks'));
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
        $formData = $request->validated();

        $expenseMobileBank->update($formData);
        return redirect(route('expense.mobilebank.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExpenseMobileBank  $expenseMobileBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseMobileBank $expenseMobileBank)
    {
        $expenseMobileBank->delete();
        return back();
    }
}
