<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//********************************Routes Get***********************************************
//Route::get('admin/settings', [App\Http\Controllers\TbCardapiosController::class, 'index'])->name('cardapios');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'listarDados'])->name('home');

//********************************Routes Get***********************************************
Route::get('admin/cardapios/index', [App\Http\Controllers\TbCardapiosController::class, 'index'])->name('cardapios_create');
Route::get('admin/cardapios/list', [App\Http\Controllers\TbCardapiosController::class, 'list'])->name('cardapios_list');
Route::get('admin/cardapios/{id}/editar', [App\Http\Controllers\TbCardapiosController::class, 'edit'])->name('cardapios_editar');

//********************************Routes Get***********************************************
Route::get('admin/planos/index', [App\Http\Controllers\TbPlanosController::class, 'index'])->name('index');
Route::get('admin/planos/list', [App\Http\Controllers\TbPlanosController::class, 'list'])->name('list');
Route::get('admin/planos/{id}/editar', [App\Http\Controllers\TbPlanosController::class, 'edit'])->name('editar');
//********************************Routes Get***********************************************
Route::get('admin/evolucoes', [App\Http\Controllers\TbEvolucaoController::class, 'index'])->name('evolucoes');
Route::get('admin/evolucoes/list', [App\Http\Controllers\TbEvolucaoController::class, 'list'])->name('list');
Route::get('admin/evolucoes/{id}/editar', [App\Http\Controllers\TbEvolucaoController::class, 'edit'])->name('editar');
//********************************Routes Get***********************************************
Route::get('admin/nutricionista/listar', [App\Http\Controllers\TbNutricionistasController::class, 'listar'])->name('nutricionista_listar');
Route::get('admin/nutricionistas', [App\Http\Controllers\TbNutricionistasController::class, 'index'])->name('nutricionistas');
//********************************Routes Get***********************************************
Route::get('admin/pacientes', [App\Http\Controllers\TbPacientesController::class, 'index'])->name('pacientes');
Route::get('admin/pacientes/listar', [App\Http\Controllers\TbPacientesController::class, 'listar'])->name('pacientes.listar');
Route::get('admin/pacientes/editar/{id}', [App\Http\Controllers\TbPacientesController::class, 'editar'])->name('paciente.editar');
Route::get('admin/pacientes/excluir/{id}', [App\Http\Controllers\TbPacientesController::class, 'excluir'])->name('paciente.excluir');


//********************************Routes Post***********************************************
Route::post('admin/cardapios/index', [App\Http\Controllers\TbCardapiosController::class, 'store'])->name('cardapios');
Route::post('admin/cardapios/{id}/update', [App\Http\Controllers\TbCardapiosController::class, 'update'])->name('update');
Route::get('admin/cardapios/{id}/delete', [App\Http\Controllers\TbCardapiosController::class, 'destroy'])->name('delete');
//********************************Routes Post***********************************************
Route::post('admin/planos/index', [App\Http\Controllers\TbPlanosController::class, 'store'])->name('planos');
Route::post('admin/planos/{id}/update', [App\Http\Controllers\TbPlanosController::class, 'update'])->name('update');
Route::get('admin/planos/{id}/delete', [App\Http\Controllers\TbPlanosController::class, 'destroy'])->name('delete');
//********************************Routes Post***********************************************
Route::post('admin/evolucoes', [App\Http\Controllers\TbEvolucaoController::class, 'store'])->name('evolucao');
Route::post('admin/evolucoes/{id}/update', [App\Http\Controllers\TbEvolucaoController::class, 'update'])->name('update');
Route::get('admin/evolucoes/{id}/delete', [App\Http\Controllers\TbEvolucaoController::class, 'destroy'])->name('destroy');
//********************************Routes Post***********************************************
Route::post('admin/nutricionistas', [App\Http\Controllers\TbNutricionistasController::class, 'store'])->name('nutricionistas');
//********************************Routes Post***********************************************
Route::post('admin/pacientes/listar', [App\Http\Controllers\TbPacientesController::class, 'listar'])->name('pacientes.listar');
Route::post('admin/pacientes',      [App\Http\Controllers\TbPacientesController::class, 'store'])->name('pacientes.index');
Route::post('admin/pacientes/{id}/update', [App\Http\Controllers\TbPacientesController::class, 'update'])->name('pacientes.update');










