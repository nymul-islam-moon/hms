<?php

namespace App\Http\Controllers;

use App\Models\IncomeCard;
use App\Http\Requests\StoreIncomeCardRequest;
use App\Http\Requests\UpdateIncomeCardRequest;

class IncomeCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomeCards = IncomeCard::all();
        return view('income.card.index', compact('incomeCards'));
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
     * @param  \App\Http\Requests\StoreIncomeCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIncomeCardRequest $request)
    {
        $formData = $request->validated();

        IncomeCard::create($formData);
        return back();
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IncomeCard  $incomeCard
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeCard $incomeCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IncomeCard  $incomeCard
     * @return \Illuminate\Http\Response
     */
    public function edit(IncomeCard $incomeCard)
    {
        return view('income.card.edit', compact('incomeCard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIncomeCardRequest  $request
     * @param  \App\Models\IncomeCard  $incomeCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIncomeCardRequest $request, IncomeCard $incomeCard)
    {
        $formData = $request->validated();

        $incomeCard->update($formData);
        return redirect(route('income.card.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IncomeCard  $incomeCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(IncomeCard $incomeCard)
    {
        $incomeCard->delete();
        return back();
    }
}
