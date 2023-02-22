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
        return view('system.mobile_bank.index', compact('mobileBanks'));
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
    public function edit(MobileBank $mobilebanksystem)
    {
        return view('system.mobile_bank.edit', compact('mobilebanksystem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMobileBankRequest  $request
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMobileBankRequest $request, MobileBank $mobilebanksystem)
    {
        $formData = $request->validated();

        $mobilebanksystem->update($formData);
        return redirect(route('system.mobilebank.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileBank $mobilebanksystem)
    {

        $mobilebanksystem->delete();
        return back();
    }
}
