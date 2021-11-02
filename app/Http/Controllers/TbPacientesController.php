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

        $dados['pacientes']=tbPacientes::paginate(10);

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
        $msg = '';

        //Processo que realiza a inclusão de um novo paciente
        if($paciente = request()->except('_token') != '' && $paciente = request()->input('id') ==''){

            $campos=[
                'nome'=>'required|string|max:150',
                'email'=>'required|string|max:150',
                'idade'=>'required|integer',
            ];
            $messagem=[
                'required'=>'O campo :attribute dever ser preenchido',
                'nome.required'=>'O campo nome do é obrigatório',
                'email.required'=>'Preencha o email do paciente',
                'idade.required'=>'Informe a idade do paciente'
            ];
            $this->validate($request, $campos, $messagem);
            $paciente = request()->except('_token');
            $paciente = new tbPacientes();
            $paciente->create($request->all());
            return redirect()->action([TbPacientesController::class, 'listar']);
        }
        //realiza a edição de dados.
        if($paciente = request()->except('_token') != '' && $paciente = request()->input('id') != ''){
            $paciente = tbPacientes::find($request->input('id'));
            $update = $paciente->update($request->all());

            if($update){
                echo "Dados atualizado com sucesso";

            }else{
                echo "Não foi possível atualizado os dados";
            }
            return redirect()->route('pacientes.listar');
        }

    }

    public function procurar(Request $request){

        //dd("pesquisando por {$request->procurar}");
        $pacientes = tbPacientes::where('id', $request->input('procurar'))->get();
        dd($pacientes);
        return view('pacientes.listar', ['paciente'=>$pacientes]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbPacientes  $tbPacientes
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {

        $paciente = tbPacientes::find($id);
        return view('pacientes.pacientes_create', ['paciente'=>$paciente, ]);

    }
    public function excluir($id){

        tbPacientes::find($id)->delete();
        return redirect()->route('home');
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
