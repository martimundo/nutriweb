@extends('adminlte::page')

@section('title', 'Cadastro Cardapios')

@section('content_header')

@stop

@section('content')
    <div class="jumbotron jumbotron-fluid bg-gradient-lightblue rounded">
        <div class="container">
            <h4 class="display-6">Cadastro de Novos Cardapios</h4>
        </div>
    </div>
    <form action="" method="post">
        @csrf
        <x-adminlte-input fgroup-class="col-md-6" name="procurar" label="Localizar Cardapio" placeholder="search"
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
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome Cardapio *</label>
            <div class="col-sm-2">
                <input type="text" class="form-control-plaintext" name="nome_cardapio" id="" placeholder="Nome do Cardapio"
                    value="{{ old('nome_cardapio') }}">
                {{ $errors->has('nome_cardapio') ? $errors->first('nome_cardapio') : '' }}
            </div>

        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descreva o Cardapios</label>
            <textarea class="form-control col-10" name="desc_cardapio" id="" label-class="text-info" rows="3"
                value="{{ old('desc_cardapio') }}"></textarea>
            {{ $errors->has('desc_cardapio') ? $errors->first('desc_cardapio') : '' }}
        </div>

        <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save" />
    </form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
