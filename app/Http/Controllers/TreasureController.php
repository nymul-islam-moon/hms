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
        return view('treasure.index');
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treasure  $treasure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treasure $treasure)
    {
        //
    }
}
