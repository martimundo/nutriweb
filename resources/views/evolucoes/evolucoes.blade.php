@extends('adminlte::page')

@section('title', 'Evolucoes')

@section('content_header')
<div class="jumbotron jumbotron-fluid bg-gradient-lightblue rounded">
    <div class="container">
        <h4 class="display-6">Cadastrar Evolução</h4>
    </div>
</div>
@stop

@section('content')

<form action="" method="post">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="dific_alimentar" label="Dific. Alimentar" placeholder="Qual a sua dificuldade alimentar" fgroup-class="col-md-3" value="{{old('dific_alimentar')}}"/>
        {{ $errors->has('dific_alimentar') ? $errors->first('dific_alimentar') : '' }}

        <x-adminlte-input igroup-size="sm"  name="circ_cintura" label="Circ. Cintura" placeholder="Digite a Circunferência do Cintura" fgroup-class="col-md-4" value="{{old('circ_cintura')}}"/>
        {{ $errors->has('circ_cintura') ? $errors->first('circ_cintura') : '' }}
        <x-adminlte-input igroup-size="sm"  name="circ_quadril" label="Circ. Quadril" placeholder="Digite a Circunferência da Quadril" fgroup-class="col-md-4" value="{{old('circ_quadril')}}"/>
        {{ $errors->has('circ_quadril') ? $errors->first('circ_quadril') : '' }}
    </div>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="altura" label="Altura" placeholder="Informe a sua altura" fgroup-class="col-md-4" value="{{old('altura')}}"/>
        {{ $errors->has('altura') ? $errors->first('altura') : '' }}
        <x-adminlte-input igroup-size="sm"  name="peso" label="Peso" placeholder="Informe a seu Peso" fgroup-class="col-md-4" value="{{old('peso')}}"/>
        {{ $errors->has('peso') ? $errors->first('peso') : '' }}
    </div>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="doencas_exist" label="Doenças as Pré-Existentes do Paciente" placeholder="Descreve doenças pré existentes" fgroup-class="col-md-10" value="{{old('doencas_exist')}}"/>
        {{ $errors->has('doencas_exist') ? $errors->first('doencas_exist') : '' }}
    </div>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="pref_alimentar" label="Preferencia Alim" placeholder="Preferência Alimentar" fgroup-class="col-md-4" value="{{old('pref_alimentar')}}"/>
        {{ $errors->has('pref_alimentar') ? $errors->first('pref_alimentar') : '' }}

        <x-adminlte-input igroup-size="sm"  name="aversoes" label="Aversões" placeholder="Aversões Alimentares" fgroup-class="col-md-4" value="{{old('aversoes')}}"/>
        {{ $errors->has('aversoes') ? $errors->first('aversoes') : '' }}

        <x-adminlte-input igroup-size="sm"  name="intolerancia" label="intolerancia" placeholder="intolerâncias Alimentares" fgroup-class="col-md-4" value="{{old('intolerancia')}}"/>
        {{ $errors->has('intolerancia') ? $errors->first('intolerancia') : '' }}
    </div>

    <x-adminlte-button class="btn-flat"  type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
    <a href="{{ url('admin/evolucoes/list') }}" class="btn btn-md bg-warning text-primary mx-1 shadow"><i class="fa fa-lg fa-exclamation-triangle"></i>Listagem de Evoluções</a>
    @stop
</form>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
