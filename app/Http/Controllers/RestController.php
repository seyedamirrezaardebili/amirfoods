<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorerestRequest;
use App\Http\Requests\UpdaterestRequest;
use App\Models\rest;

class RestController extends Controller
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
     * @param  \App\Http\Requests\StorerestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rest  $rest
     * @return \Illuminate\Http\Response
     */
    public function show(rest $rest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rest  $rest
     * @return \Illuminate\Http\Response
     */
    public function edit(rest $rest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterestRequest  $request
     * @param  \App\Models\rest  $rest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterestRequest $request, rest $rest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rest  $rest
     * @return \Illuminate\Http\Response
     */
    public function destroy(rest $rest)
    {
        //
    }
}
