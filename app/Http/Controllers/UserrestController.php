<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreuserrestRequest;
use App\Http\Requests\UpdateuserrestRequest;
use App\Models\userrest;

class UserrestController extends Controller
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
     * @param  \App\Http\Requests\StoreuserrestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuserrestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userrest  $userrest
     * @return \Illuminate\Http\Response
     */
    public function show(userrest $userrest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userrest  $userrest
     * @return \Illuminate\Http\Response
     */
    public function edit(userrest $userrest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuserrestRequest  $request
     * @param  \App\Models\userrest  $userrest
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuserrestRequest $request, userrest $userrest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userrest  $userrest
     * @return \Illuminate\Http\Response
     */
    public function destroy(userrest $userrest)
    {
        //
    }
}
