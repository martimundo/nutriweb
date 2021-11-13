@extends('adminlte::page')

@section('title', 'Editar Evolução')

@section('content_header')
    <h1>Editar Evolução</h1>
@stop
@section('content')
<form action="{{ url('admin/evolucoes/'.$evolucao->id.'/update')}}" method="post">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="dific_alimentar" label="Dific. Alimentar" placeholder="Qual a sua dificuldade alimentar" fgroup-class="col-md-3" value="{{$evolucao->dific_alimentar}}"/>

        <x-adminlte-input igroup-size="sm"  name="circ_cintura" label="Circ. Cintura" placeholder="Digite a Circunferência do Cintura" fgroup-class="col-md-4" value="{{$evolucao->circ_cintura}}" />

        <x-adminlte-input igroup-size="sm"  name="circ_quadril" label="Circ. Quadril" placeholder="Digite a Circunferência da Quadril" fgroup-class="col-md-4"  value="{{$evolucao->circ_quadril}}" />
    </div>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="altura" label="Altura" placeholder="Informe a sua altura" fgroup-class="col-md-4" value="{{$evolucao->altura}}" />
        <x-adminlte-input igroup-size="sm"  name="doencas_exist" label="Doenças as Pré-Existentes do Paciente" placeholder="Descreva as doenças pré existentes" fgroup-class="col-md-10" value="{{$evolucao->doencas_exist}}"/>
    </div>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="peso" label="Peso" placeholder="Informe a seu Peso" fgroup-class="col-md-4" value="{{$evolucao->peso}}" />
    </div>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="pref_alimentar" label="Preferencia Alim" placeholder="Preferência Alimentar" fgroup-class="col-md-4" value="{{$evolucao->pref_alimentar}}" />
        <x-adminlte-input igroup-size="sm"  name="intolerancia" label="Intolerancia" placeholder="intolerâncias Alimentares" fgroup-class="col-md-4"  value="{{$evolucao->intolerancia}}" />
        <x-adminlte-input igroup-size="sm"  name="aversoes" label="Aversoes" placeholder="intolerâncias Alimentares" fgroup-class="col-md-4"  value="{{$evolucao->aversoes}}" />
    </div>
    <x-adminlte-button class="btn-flat"  type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
    <a href="{{ url('admin/evolucoes/list') }}" class="btn btn-md bg-warning text-primary mx-1 shadow"><i class="fa fa-lg fa-exclamation-triangle"></i>Listagem de Evoluções</a>
</form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
