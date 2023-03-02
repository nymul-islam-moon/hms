<?php

namespace App\Http\Controllers;

use App\Models\Treasure;
use App\Http\Requests\StoreTreasureRequest;
use App\Http\Requests\UpdateTreasureRequest;

class TreasureController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treasures = Treasure::all();

        return view('treasure.index', compact('treasures'));
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
     * @param  \App\Http\Requests\StoreTreasureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTreasureRequest $request)
    {
        // $formData = $request->validated();

        // // code generate sector

        // $objectName = new Treasure;
        // $table_name = $objectName->getTable();
        // dd($table_name);


        // // $latest_id = $objectName->latest()->first()->id;

        // // dd($latest_id);

        // // $code_name = '';
        // // if($latest_id == null || $latest_id == 0) {
        // //     $code_name = '1';
        // // }else{

        // // }

        // Treasure::create($formData);
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function show(Treasure $treasure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function edit(Treasure $treasure)
    {
        return view('treasure.edit', compact('treasure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTreasureRequest  $request
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTreasureRequest $request, Treasure $treasure)
    {
        $formData = $request->validated();

        $treasure->update($formData);
        return redirect(route('treasure.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treasure $treasure)
    {
        $treasure->delete();
        return back();
    }
}
