@extends('adminlte::page')

@section('title', 'Nutricionistas')

@section('content_header')
    <h1>Cadastro de Nutricionitas</h1>
@stop

@section('content')
    <p>Cadastre uma nova nutricionitas.</p>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <x-adminlte-input igroup-size="sm"  name="crn" label="CRN" placeholder="Nº. CRN"
            fgroup-class="col-md-4" disable-feedback/>
        <x-adminlte-input igroup-size="sm"  name="nome" label="Nome" placeholder="Nome da Nutricionistas"
            fgroup-class="col-md-8" disable-feedback/>
    </div>
    <div class="row">
        {{-- With label and feedback disabled --}}
<x-adminlte-input-file name="foto" igroup-size="sm"  label="Foto" placeholder="Choose a file..."
disable-feedback/>
    </div>
    <x-adminlte-button class="btn-flat"  type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save"/>
@stop
</form>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
