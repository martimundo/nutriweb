<?php

namespace App\Http\Controllers;

use App\Models\tbEvolucao;
use Illuminate\Http\Request;

class TbEvolucaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evolucoes.evolucoes');
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
        $imc = $request->input('peso') /( $request->input('altura')*$request->input('altura'));

        $evolucao = new tbEvolucao();
        $evolucao->dific_alimentar = $request->input('dific_alimentar');
        $evolucao->circ_cintura = $request->input('circ_cintura');
        $evolucao->circ_quadril = $request->input('circ_quadril');
        //$evolucao['hipertensao'] = $request->input('hipertensao');
        //$evolucao['diabete'] = $request->input('diabete');
        $evolucao->peso = $request->input('peso');
        $evolucao->imc = $request->input($imc);
        $evolucao->save();

        return redirect()->action([TbEvolucaoController::class, 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbEvolucao  $tbEvolucao
     * @return \Illuminate\Http\Response
     */
    public function show(tbEvolucao $tbEvolucao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbEvolucao  $tbEvolucao
     * @return \Illuminate\Http\Response
     */
    public function edit(tbEvolucao $tbEvolucao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbEvolucao  $tbEvolucao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbEvolucao $tbEvolucao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbEvolucao  $tbEvolucao
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbEvolucao $tbEvolucao)
    {
        //
    }
}
