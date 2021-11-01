@extends('adminlte::page')

@section('title', 'Evolucoes')

@section('content_header')
    <h1>Evoluções</h1>
@stop

@section('content')
    <p>Cadastro de Evolução do Paciente</p>
<form action="" method="post">
    @csrf
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="dific_alimentar" label="Dific. Alimentar" placeholder="Qual a sua dificuldade alimentar" fgroup-class="col-md-3" disable-feedback/>

        <x-adminlte-input igroup-size="sm"  name="circ_cintura" label="Circ. Cintura" placeholder="Digite a Circunferência do Cintura" fgroup-class="col-md-2" disable-feedback/>

        <x-adminlte-input igroup-size="sm"  name="circ_quadril" label="Circ. Quadril" placeholder="Digite a Circunferência da Quadril" fgroup-class="col-md-2" disable-feedback/>

       <!-- <x-adminlte-input igroup-size="sm"  type="checkbox" name="hipertensao[]" value="hipertensao" label="Hipertensão" fgroup-class="col-md-2" disable-feedback/>
        <x-adminlte-input igroup-size="sm"  type="checkbox" name="diabete[]" value="diabete"label="Diabetes" fgroup-class="col-md-2" disable-feedback/>-->
    </div>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="altura" label="Altura" placeholder="Informe a sua altura" fgroup-class="col-md-6" disable-feedback/>
        <x-adminlte-input igroup-size="sm"  name="peso" label="Peso" placeholder="Informe a seu Peso" fgroup-class="col-md-6" disable-feedback/>
    </div>
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="pref_alimentar" label="Preferencia Alim" placeholder="Preferência Alimentar" fgroup-class="col-md-4" disable-feedback/>
        <x-adminlte-input igroup-size="sm"  name="intolerancia" label="Intolerancia" placeholder="intolerâncias Alimentares" fgroup-class="col-md-4" disable-feedback/>
        <x-adminlte-input igroup-size="sm"  name="aversoes" label="Aversoes" placeholder="intolerâncias Alimentares" fgroup-class="col-md-4" disable-feedback/>
    </div>
    <x-adminlte-button class="btn-flat"  type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
    @stop
</form>

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
