<?php

namespace App\Http\Controllers;

use App\Models\tbNutricionistas;
use Illuminate\Http\Request;

class TbNutricionistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nutricionista['nutricionistas'] = tbNutricionistas::paginate(10);
        return view('gerenciar.nutricionistas', $nutricionista);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nutricionista = new tbNutricionistas();
        $nutricionista->crn = $request->input('crn');
        $nutricionista->nome = $request->input('nome');

        if($request->hasFile('foto')){
            $nutricionista['foto']=$request->file('foto')->store('uploads','public');
        }
        $nutricionista->save();
        return redirect()->action([TbNutricionistasController::class, 'index']);
        return redirect('nutricionistas')->with('mensagem','Nutricionista Cadastrada com sucesso!');
    }
    public function listar(){
        $nutricionista['nutricionistas'] = tbNutricionistas::paginate(2);
        return view('gerenciar.list', $nutricionista);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbNutricionistas  $tbNutricionistas
     * @return \Illuminate\Http\Response
     */
    public function show(tbNutricionistas $tbNutricionistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbNutricionistas  $tbNutricionistas
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $nutricionista = tbNutricionistas::find($id);
        return view('gerenciar.nutri_edit', ['nutricionista'=>$nutricionista]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbNutricionistas  $tbNutricionistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $nutricionistas = tbNutricionistas::find($id);
        $nutricionistas->update($data);
        return redirect()->action([TbNutricionistasController::class, 'listar']);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbNutricionistas  $tbNutricionistas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nutricionista = tbNutricionistas::find($id);
        $nutricionista->delete();
        
        return redirect()->action([TbNutricionistasController::class, 'listar']);
    }
}
