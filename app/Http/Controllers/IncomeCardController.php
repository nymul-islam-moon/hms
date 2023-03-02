<?php

namespace App\Http\Controllers;

use App\Models\IncomeCard;
use App\Http\Requests\StoreIncomeCardRequest;
use App\Http\Requests\UpdateIncomeCardRequest;
use App\Models\Card;

class IncomeCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::all();
        $incomeCards = IncomeCard::all();
        return view('income.card.index', compact('incomeCards', 'cards'));
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

        // code generation start

        $code_name = '';

        $objectName = new IncomeCard();

        if (IncomeCard::where('id', 1)->first()) {
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
