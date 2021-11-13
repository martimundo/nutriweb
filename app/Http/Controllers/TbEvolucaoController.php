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

        $campos=[
            'dific_alimentar'=>'required|string|max:150',
            'circ_cintura'=>'required',
            'circ_quadril'=>'required',
            'doencas_exist' =>'required|string|max:200',
            'altura'=>'required',
            'peso' =>'required'
        ];

        $mensagem=[

            'dific_alimentar.required'=>'Prencimento obrigatório!',
            'circ_cintura.required'=>'Prencimento obrigatório!',
            'circ_quadril.required'=>'Prencimento obrigatório!',
            'doencas_exist.required'=>'Prencimento obrigatório!',
            'altura.required'=>'Prencimento obrigatório!',
            'peso.required'=>'Prencimento obrigatório!'

        ];
        $this->validate($request, $campos, $mensagem);
        $evolucao = new tbEvolucao();
        $evolucao->dific_alimentar = $request->input('dific_alimentar');
        $evolucao->circ_cintura = $request->input('circ_cintura');
        $evolucao->circ_quadril = $request->input('circ_quadril');
        $evolucao->altura = $request->input('altura');
        $evolucao->doencas_exist = $request->input('doencas_exist');
        $evolucao->peso = $request->input('peso');
        $evolucao->pref_alimentar = $request->input('pref_alimentar');
        $evolucao->intolerancia = $request->input('intolerancia');
        $evolucao->aversoes = $request->input('aversoes');
        dd($evolucao);
        $evolucao->save();

        return redirect()->action([TbEvolucaoController::class, 'index']);

    }

    public function list(){

        $evolucao['evolucoes'] = tbEvolucao::paginate(5);
        return view('evolucoes.list', $evolucao);
    }
    public function calcImc(Request $request){

        $evolucao->altura = $request->input('altura');
        $evolucao->peso = $request->input('peso');
        $imc = $request->input('peso') /( $request->input('altura')*$request->input('altura'));
        return $imc;

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
    public function edit($id)
    {
        $evolucao = TbEvolucao::find($id);
        return view('evolucoes.edit', compact('evolucao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbEvolucao  $tbEvolucao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $evolucao =tbEvolucao::find($id);
        //dd($evolucao);
        $evolucao->update($data);
        return redirect()->route('list');
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
