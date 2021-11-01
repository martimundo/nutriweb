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

Route::get('admin/cardapios/list', [App\Http\Controllers\TbCardapiosController::class, 'index'])->name('cardapios_list');
Route::get('admin/cardapios/create', [App\Http\Controllers\TbCardapiosController::class, 'create'])->name('cardapios_create');
Route::get('admin/evolucoes', [App\Http\Controllers\TbEvolucaoController::class, 'index'])->name('evolucoes');
Route::get('admin/nutricionistas', [App\Http\Controllers\TbNutricionistasController::class, 'index'])->name('nutricionistas');
Route::get('admin/pacientes', [App\Http\Controllers\TbPacientesController::class, 'index'])->name('pacientes');
Route::get('admin/controleAcesso', [App\Http\Controllers\TbAcessosController::class, 'index'])->name('cotrolacess');
Route::get('admin/pacientes/listar', [App\Http\Controllers\TbPacientesController::class, 'listar'])->name('pacientes.listar');
Route::get('admin/pacientes/editar/{id}', [App\Http\Controllers\TbPacientesController::class, 'editar'])->name('paciente.editar');

//********************************Routes Post***********************************************
Route::post('admin/cardapios/create',      [App\Http\Controllers\TbCardapiosController::class, 'store'])->name('cardapios');
Route::post('admin/pacientes',      [App\Http\Controllers\TbPacientesController::class, 'store'])->name('pacientes.index');
Route::post('admin/nutricionistas', [App\Http\Controllers\TbNutricionistasController::class, 'store'])->name('nutricionistas');
Route::post('admin/evolucoes', [App\Http\Controllers\TbEvolucaoController::class, 'store'])->name('evolucao');
Route::post('admin/pacientes/listar', [App\Http\Controllers\TbPacientesController::class, 'listar'])->name('pacientes.listar');

Route::post('admin/pacientes/procurar', [App\Http\Controllers\TbPacientesController::class, 'procurar'])->name('pacientes.procurar');










