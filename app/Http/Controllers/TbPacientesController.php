<?php

namespace App\Http\Controllers;

use App\Models\tbPacientes;
use Illuminate\Http\Request;

class TbPacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pacientes.pacientes_create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.pacientes_create');
    }
    public function listar(Request  $request){

        $pacientes = tbPacientes::where('id_paciente'.$request->input('procurar'))->get();
        //dd( $pacientes);
        
        $dados['pacientes']=tbPacientes::paginate(4);
        return view('pacientes.listar', $dados);
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
            'nome'=>'required|string|max:50',
            'email'=>'required|string|max:150',
            'idade'=>'required|integer',
        ];
        $messagem=[
            'nome.required'=>'O campo nome do é obrigatório',
            'email.required'=>'Preencha o email do paciente',
            'idade.required'=>'Informe a idade do paciente'
        ];
        $this->validate($request, $campos, $messagem);
        $paciente = request()->except('_token');  
        $paciente = new tbPacientes();
        $paciente->nome = $request->input('nome');
        $paciente->genero = $request->input('genero');
        $paciente->email = $request->input('email');
        $paciente->idade = $request->input('idade');
        $paciente->save();

        return redirect()->action([TbPacientesController::class, 'listar']);

    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbPacientes  $tbPacientes
     * @return \Illuminate\Http\Response
     */
    public function show(tbPacientes $tbPacientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbPacientes  $tbPacientes
     * @return \Illuminate\Http\Response
     */
    public function edit(tbPacientes $tbPacientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbPacientes  $tbPacientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbPacientes $tbPacientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbPacientes  $tbPacientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbPacientes $tbPacientes)
    {
        //
    }
}
