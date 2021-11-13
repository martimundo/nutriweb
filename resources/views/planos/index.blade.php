@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')

@stop

@section('content')
    <div class="jumbotron jumbotron-fluid bg-gradient-lightblue rounded">
        <div class="container">
            <h4 class="display-6">Cadastro de Planos</h4>
        </div>
    </div>
    <form action="" method="post">
        @csrf
        <x-adminlte-input fgroup-class="col-md-6" name="procurar" label="Procurar" placeholder="search"
            igroup-size="sm">
            <x-slot name="appendSlot">
                <x-adminlte-button theme="outline-success" label="buscar!" />
            </x-slot>
            <x-slot name="prependSlot">
                <div class="input-group-text text-success">
                    <i class="fas fa-search"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <div class="form-group">
            <x-adminlte-input igroup-size="sm" name="desc_plano" label="Nome do Plano" placeholder="Nome do Plano"
                fgroup-class="col-md-6" value="{{ old('desc_plano') }}" />
                {{ $errors->has('desc_plano') ? $errors->first('desc_plano') : '' }}
        </div>
        <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save" />
        <a href="{{ url('admin/planos/list') }}" class="btn btn-md bg-warning text-primary mx-1 shadow"><i
            class="fa fa-lg fa-exclamation-triangle"></i>Relação de Planos</a>
    </form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
