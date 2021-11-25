@extends('adminlte::page')

@section('title', 'Nutricionistas')

@section('content_header')
    <h1>Cadastro de Nutricionitas</h1>
@stop

@section('content')
    <p>Editar dados cadastrais nutricionitas.</p>
    <form action="{{ url('admin/nutricionistas/'.$nutricionista->id.'/update') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$nutricionista->id ?? ''}}">
        <div class="row">
            <x-adminlte-input igroup-size="sm" name="crn" label="CRN" placeholder="Nº. CRN" fgroup-class="col-md-4"
            value="{{$nutricionista->crn ?? old('crn') }}" />
            <x-adminlte-input igroup-size="sm" name="nome" label="Nome" placeholder="Nome da Nutricionistas"
                fgroup-class="col-md-8"  value="{{$nutricionista->nome ?? old('nome') }}"/>
        </div>  
        <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="primary" icon="fas fa-sm fa-save" />
    </form>    
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
