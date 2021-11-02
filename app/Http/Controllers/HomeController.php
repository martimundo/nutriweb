<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbPacientes;



class HomeController extends Controller
{
    protected $pacientes;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()    {
       
        return view('home');
    }
    public function listarDados(){

        $dados['pacientes']=tbPacientes::paginate(10);
        return view('home', $dados);
    }
       

}
