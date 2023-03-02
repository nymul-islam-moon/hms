<?php

namespace App\Http\Controllers;

use App\Models\IncomeMobileBank;
use App\Http\Requests\StoreIncomeMobileBankRequest;
use App\Http\Requests\UpdateIncomeMobileBankRequest;
use App\Models\MobileBank;

class IncomeMobileBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomeMobileBanks = IncomeMobileBank::all();
        $mobileBanks = MobileBank::all();
        return view('income.mobile_bank.index', compact('incomeMobileBanks', 'mobileBanks'));
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
     * @param  \App\Http\Requests\StoreIncomeMobileBankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncomeMobileBankRequest $request)
    {

        // dd($request->all());

        $formData = $request->validated();

        // code generation start

        $code_name = '';

        $objectName = new IncomeMobileBank();

        if (IncomeMobileBank::where('id', 1)->first()) {
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

        IncomeMobileBank::create($formData);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncomeMobileBank  $incomeMobileBank
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeMobileBank $incomeMobileBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncomeMobileBank  $incomeMobileBank
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomeMobileBank $incomeMobileBank)
    {
        $mobileBanks = MobileBank::all();
        return view('income.mobile_bank.edit', compact('incomeMobileBank', 'mobileBanks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncomeMobileBankRequest  $request
     * @param  \App\Models\IncomeMobileBank  $incomeMobileBank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncomeMobileBankRequest $request, IncomeMobileBank $incomeMobileBank)
    {
        $formData = $request->validated();
        $incomeMobileBank->update($formData);
        return redirect(route('income.mobilebank.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncomeMobileBank  $incomeMobileBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncomeMobileBank $incomeMobileBank)
    {

        $incomeMobileBank->delete();
        return back();
    }
}
