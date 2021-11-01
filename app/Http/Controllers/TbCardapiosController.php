<?php

namespace App\Http\Controllers;

use App\Models\tbCardapios;
use Illuminate\Http\Request;

class TbCardapiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $dados['cardapios']=TbCardapios::paginate(4);
        return view('cardapio.cardapios_list', $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cardapio.cardapios_create');

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
            'nome_cardapio'=>'required|string|max:50',
            'desc_cardapio'=>'required|string|max:150',
        ];
        $messagem=[
            'nome_cardapio.required'=>'O campo nome do cardapio é obrigatório',
            'desc_cardapio.required'=>'Preencha o campo descrição cardapio'
        ];
        $this->validate($request, $campos, $messagem);
        $cardapio = request()->except('_token');
        $cardapio = new tbCardapios();
        $cardapio->nome_cardapio=$request->input('nome_cardapio');
        $cardapio->desc_cardapio=$request->input('desc_cardapio');
        $cardapio->save();

        return redirect()->action([TbCardapiosController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbCardapios  $tbCardapios
     * @return \Illuminate\Http\Response
     */
    public function show(tbCardapios $tbCardapios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbCardapios  $tbCardapios
     * @return \Illuminate\Http\Response
     */
    public function edit(tbCardapios $tbCardapios)
    {
        $cardapio = TbCardapios::findOrfail($id);
        return view('cardapio.cardapio_edit', compact('cardapio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbCardapios  $tbCardapios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbCardapios $tbCardapios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbCardapios  $tbCardapios
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbCardapios $tbCardapios)
    {
        //
    }
}
