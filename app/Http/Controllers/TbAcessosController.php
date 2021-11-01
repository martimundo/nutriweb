<?php

namespace App\Http\Controllers;

use App\Models\tbAcessos;
use Illuminate\Http\Request;

class TbAcessosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('configuracoes.controlacesss');
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
     * @param  \App\Models\tbAcessos  $tbAcessos
     * @return \Illuminate\Http\Response
     */
    public function show(tbAcessos $tbAcessos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbAcessos  $tbAcessos
     * @return \Illuminate\Http\Response
     */
    public function edit(tbAcessos $tbAcessos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbAcessos  $tbAcessos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbAcessos $tbAcessos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbAcessos  $tbAcessos
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbAcessos $tbAcessos)
    {
        //
    }
}
