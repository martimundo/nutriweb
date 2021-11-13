@extends('adminlte::page')

@section('title', 'Cadastro Cardapios')

@section('content_header')
    <h1>Editar Cardapios</h1>
@stop

@section('content')
<form action="{{ url('admin/cardapios/'.$cardapio->id.'/update')}}" method="post">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Atualize o Cardapios</label>
        <textarea class="form-control col-10" name="desc_cardapio" id="" label-class="text-info" rows="3"
            value="{{ $cardapio->desc_cardapio }}">{{ $cardapio->desc_cardapio }}</textarea>
        {{ $errors->has('desc_cardapio') ? $errors->first('desc_cardapio') : '' }}
    </div>
    <x-adminlte-button class="btn-flat" type="submit" label="Atualizar" theme="success" icon="fas fa-lg fa-save" />
    <a href="{{ url('admin/cardapios/list') }}" class="btn btn-md bg-warning text-primary mx-1 shadow"><i class="fa fa-lg fa-exclamation-triangle"></i>Listagem de Cardapios</a>
</form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
