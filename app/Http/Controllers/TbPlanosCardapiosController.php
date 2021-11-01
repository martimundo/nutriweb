<?php

namespace App\Http\Controllers;

use App\Models\tbPlanosCardapios;
use Illuminate\Http\Request;

class TbPlanosCardapiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Cardapios";
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbPlanosCardapios  $tbPlanosCardapios
     * @return \Illuminate\Http\Response
     */
    public function show(tbPlanosCardapios $tbPlanosCardapios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbPlanosCardapios  $tbPlanosCardapios
     * @return \Illuminate\Http\Response
     */
    public function edit(tbPlanosCardapios $tbPlanosCardapios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbPlanosCardapios  $tbPlanosCardapios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbPlanosCardapios $tbPlanosCardapios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbPlanosCardapios  $tbPlanosCardapios
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbPlanosCardapios $tbPlanosCardapios)
    {
        //
    }
}
