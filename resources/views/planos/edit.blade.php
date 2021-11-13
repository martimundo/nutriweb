@extends('adminlte::page')

@section('title', 'Editar Planos')

@section('content_header')
    <h1>Editar Planos</h1>
@stop
@section('content')
<form action="{{ url('admin/planos/'.$plano->id.'/update')}}" method="post">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <div class="form-group">

        <x-adminlte-input igroup-size="sm" name="desc_plano" label="Nome do Plano" placeholder="Nome do Plano"
                fgroup-class="col-md-6" value="{{ $plano->desc_plano }}" />
                {{ $errors->has('desc_plano') ? $errors->first('desc_plano') : '' }}
    </div>
    <x-adminlte-button class="btn-flat" type="submit" label="Atualizar" theme="success" icon="fas fa-lg fa-save" />
    <a href="{{ url('admin/planos/list') }}" class="btn btn-md bg-warning text-primary mx-1 shadow"><i class="fa fa-lg fa-exclamation-triangle"></i>Listagem de Cardapios</a>
</form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
