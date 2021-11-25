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
            <x-adminlte-input igroup-size="sm" name="crn" label="CRN" placeholder="Nº. CRN" fgroup-class="col-md-4"
                disable-feedback />
            <x-adminlte-input igroup-size="sm" name="nome" label="Nome" placeholder="Nome da Nutricionistas"
                fgroup-class="col-md-8" disable-feedback />
        </div>
        <div class="row">
            {{-- With label and feedback disabled --}}
            <x-adminlte-input-file name="foto" igroup-size="sm" label="Foto" placeholder="Choose a file..."
                disable-feedback />
        </div>
        <x-adminlte-button class="btn-flat" type="submit" label="Salvar" theme="success" icon="fas fa-lg fa-save" />
        <a href="{{ url('admin/nutricionistas/listar') }}" class="btn btn-md bg-warning text-primary mx-1 shadow"><i
                class="fa fa-lg fa-exclamation-triangle"></i>Relação de Nutricionistas</a>

    </form>
    <div class="card-body table-responsive p-0">
        <table class="table table-sm table-striped table-valign-middle table-responsive">
            <thead>
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Foto</th>
                    <th scope="col">CRN</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nutricionistas as $nutricionista)
                    <tr>
                        <td>{{ $nutricionista->id }}</td>
                        <td><img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $nutricionista->foto }}"
                                width="100" alt=""></td>
                        <td>{{ $nutricionista->crn }}</td>
                        <td>{{ $nutricionista->nome }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$nutricionistas->links()}}
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
