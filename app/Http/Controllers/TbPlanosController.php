<?php

namespace App\Http\Controllers;

use App\Models\tbPlanos;
use Illuminate\Http\Request;

class TbPlanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('planos.index');
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

    public function list()
    {
        $dados['planos']=TbPlanos::paginate(4);
        return view('planos.list', $dados);
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

            'desc_plano'=>'required|string|max:150',
        ];
        $messagem=[

            'desc_plano.required'=>'O Campo nome do Plano é Obrigatório!'
        ];
        $this->validate($request, $campos, $messagem);
        $plano = request()->except('_token');
        $plano = new tbPlanos();

        $plano->desc_plano=$request->input('desc_plano');
        $plano->save();

        return redirect()->action([TbPlanosController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbPlanos  $tbPlanos
     * @return \Illuminate\Http\Response
     */
    public function show(tbPlanos $tbPlanos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbPlanos  $tbPlanos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plano = TbPlanos::find($id);
        return view('planos.edit', compact('plano'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbPlanos  $tbPlanos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $plano = tbPlanos::find($id);
        $plano->update($data);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbPlanos  $tbPlanos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plano= tbPlanos::find($id);
        $plano->delete();
        return redirect()->route('list');
    }
}
