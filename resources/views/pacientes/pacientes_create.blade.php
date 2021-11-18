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
        <input type="hidden" name="id" value="{{$paciente->id ?? ''}}">
        @csrf

        <div class="row">
            <x-adminlte-input igroup-size="sm" name="nome" label="Nome" placeholder="Nome do Paciente"
                fgroup-class="col-md-6" value="{{$paciente->nome ?? old('nome') }}" />
            <x-adminlte-input name="idade" label="Idade" igroup-size="sm" placeholder="Idade" fgroup-class="col-md-4"
                value="{{$paciente->idade ?? old('idade') }}" />
        </div>
        <div class="form-row">
            <x-adminlte-input fgroup-class="col-md-6" name="email" value="{{$paciente->email ?? old('email') }}" label="Email" type="email"
                igroup-size="sm" icon="fas fa-lg fa-envelope" placeholder="mail@example.com" />
            <div class="form-group col-md-4">
              <label for="input">Sexo</label>
              <select id="input" class="form-control form-control-sm" name="genero">
                <option selected>Selecione...</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Sem Informação">Sem Informação</option>
              </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
              <label for="input">Médica(o)Nutric...</label>
              <select id="input" class="form-control form-control-sm" name="nutri_id">
                    @foreach ($nutricionistas as $nutricionista)
                        <option value="{{$nutricionista->id}}">{{$nutricionista->nome}}</option>
                    @endforeach
              </select>
            </div>
            <div class="form-group col-md-4">
                <label for="input">Evolução Semanal</label>
                <select id="input" class="form-control form-control-sm" name="evolseman_id">
                  <option value="1">1</option>
                </select>
              </div>
        </div>
        <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="primary" icon="fas fa-sm fa-save" />
        <a href="{{ url('admin/pacientes/listar') }}" class="btn btn-md bg-warning text-primary mx-1 shadow"><i
                class="fa fa-lg fa-exclamation-triangle"></i>Lista de Pacientes</a>

    @stop
</form>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
