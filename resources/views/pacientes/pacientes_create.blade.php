@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <div class="jumbotron jumbotron-fluid bg-gradient-lightblue rounded">
        <div class="container">
            <h4 class="display-6">Cadastro de Novos Pacientes</h4>
        </div>
    </div>
@stop

@section('content')
    <form action="{{ url('admin/pacientes') }}" method="post">
        @csrf
        {{-- With multiple slots and lg size --}}
        <x-adminlte-input fgroup-class="col-md-6" name="procurar" label="Localizar Paciente" placeholder="faça aqui a procurar"
            igroup-size="sm">
            <x-slot name="appendSlot">
                <x-adminlte-button theme="outline-success" type="submit" label="buscar!" />
                
            </x-slot>
            <x-slot name="prependSlot">
                <div class="input-group-text text-primary">
                    <i class="fas fa-search"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <div class="row">
            <x-adminlte-input igroup-size="sm" name="nome" label="Nome" placeholder="Nome do Paciente"
                fgroup-class="col-md-6" value="{{ old('nome') }}" />
            <x-adminlte-input name="idade" label="Idade" igroup-size="sm" placeholder="Idade" fgroup-class="col-md-6"
                value="{{ old('idade') }}" />
        </div>
        <x-adminlte-input fgroup-class="col-md-4" name="email" value="{{ old('email') }}" label="Email" type="email"
            igroup-size="sm" icon="fas fa-lg fa-envelope" placeholder="mail@example.com" />
        <x-adminlte-select fgroup-class="col-md-4" igroup-size="sm" label="Genero" name="genero">
            <x-adminlte-options :options="['Selecione uma opção','Masculino', 'Feminino', 'Prefiro não informar']"
                disabled="0" empty-option="Selecione uma opção" />
        </x-adminlte-select>
        <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="primary" icon="fas fa-sm fa-save" />
        <a href="{{ url('admin/pacientes/listar') }}" class="btn btn-md bg-warning text-primary mx-1 shadow"><i
                class="fa fa-lg fa-exclamation-triangle"></i>Lista de Pacientes</a>

    @stop
</form>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
