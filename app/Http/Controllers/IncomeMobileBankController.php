<?php

namespace App\Http\Controllers;

use App\Models\IncomeMobileBank;
use App\Http\Requests\StoreIncomeMobileBankRequest;
use App\Http\Requests\UpdateIncomeMobileBankRequest;

class IncomeMobileBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomeMobileBank = IncomeMobileBank::all();

        return view('income.mobilebank.index', compact('incomeMobileBank'));
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
        $formData = $request->validated();

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
        return view('income.mobilebank.edit', compact('incomeMobileBank'));
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
