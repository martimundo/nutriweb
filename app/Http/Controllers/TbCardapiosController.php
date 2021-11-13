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

        return view('cardapio.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {


    }
    public function list()
    {
        $dados['cardapios']=TbCardapios::paginate(4);
        return view('cardapio.cardapios_list', $dados);
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

            'desc_cardapio'=>'required|string|max:150',
        ];
        $messagem=[

            'desc_cardapio.required'=>'Preencha o campo descrição cardapio'
        ];
        $this->validate($request, $campos, $messagem);
        $cardapio = request()->except('_token');
        $cardapio = new tbCardapios();

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
    public function edit($id)
    {
        $cardapio = TbCardapios::find($id);
        return view('cardapio.cardapios_edit', compact('cardapio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbCardapios  $tbCardapios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $cardapio = tbCardapios::find($id);
        $cardapio->update($data);
        return redirect()->route('cardapios_create');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbCardapios  $tbCardapios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cardapio = tbCardapios::find($id);
        $cardapio->delete();
        return redirect()->route('cardapios_list');
    }
}
