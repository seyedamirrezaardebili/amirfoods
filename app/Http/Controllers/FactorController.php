<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorefactorRequest;
use App\Http\Requests\UpdatefactorRequest;
use App\Models\factor;

class FactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorefactorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefactorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function show(factor $factor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function edit(factor $factor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefactorRequest  $request
     * @param  \App\Models\factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefactorRequest $request, factor $factor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\factor  $factor
     * @return \Illuminate\Http\Response
     */
    public function destroy(factor $factor)
    {
        //
    }
}
