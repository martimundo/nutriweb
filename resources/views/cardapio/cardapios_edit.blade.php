@extends('adminlte::page')

@section('title', 'Cadastro Cardapios')

@section('content_header')
    <h1>Editar dados Cardapios</h1>
@stop

@section('content')
    <p>Editar Dados</p>
{{-- With label, invalid feedback disabled and form group class --}}
<form action="{{ url('admin/cardapios/' . $item->id_cardapios . '/edit') }}"" method="post">
    @csrf

</form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
