<?php

namespace App\Http\Controllers;

use App\Models\MobileBank;
use App\Http\Requests\StoreMobileBankRequest;
use App\Http\Requests\UpdateMobileBankRequest;

class MobileBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobileBanks = MobileBank::all();
        return view('income.mobile_bank.system.index', compact('mobileBanks'));
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
     * @param  \App\Http\Requests\StoreMobileBankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMobileBankRequest $request)
    {
        $formData = $request->validated();

        MobileBank::create($formData);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function show(MobileBank $mobileBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileBank $mobileBank)
    {
        return view('income.mobilebank.system.edit', compact('mobileBank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMobileBankRequest  $request
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMobileBankRequest $request, MobileBank $mobileBank)
    {
        $formData = $request->validated();

        $mobileBank->update($formData);
        return redirect(route('income.mobilebank.system.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileBank $mobileBank)
    {
        $mobileBank->delete();
        return back();
    }
}
