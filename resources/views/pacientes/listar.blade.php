@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <div class="jumbotron jumbotron-fluid bg-gradient-lightblue rounded">
        <div class="container">
            <h4 class="display-6">Lista de Pacientes</h4>
        </div>
    </div>
@stop
@section('content')
    <a href="{{ url('admin/pacientes') }}" class="btn btn-xs btn-default text-primary mx-1 shadow"><i
            class="fa fa-lg fa-fw fa-plus"></i>Novo Paciente</a>

    <div class="card-body table-responsive p-0">
        {{-- With multiple slots and lg size --}}

        <form action="{{url('admin/procurar')}}" method="post">
            <x-adminlte-input fgroup-class="col-md-6" name="procurar" label="Localizar Paciente"
                placeholder="faça aqui a procurar" igroup-size="sm">
                <x-slot name="appendSlot">
                    <x-adminlte-button theme="outline-success" type="submit" label="buscar!" />

                </x-slot>
                <x-slot name="prependSlot">
                    <div class="input-group-text text-primary">
                        <i class="fas fa-search"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </form>
        <table class="table table-sm table-striped table-valign-middle table-responsive">
            <thead>
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Nome Paciente</th>
                    <th scope="col">Email do Paciente</th>
                    <th scope="col">Idade do Paciente</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->idade }}</td>
                        <td>{{ $item->genero }}</td>
                        <td><a href="{{ url('admin/pacientes/editar', $item->id) }}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ url('admin/pacientes/excluir', $item->id) }}"
                                class="btn btn-xs btn-default text-danger mx-1 shadow" title="Excluir">
                                <i class="fa fa-lg fa-fw fa-trash"></i>
                            </a>                            
                        </td>
                        <td><a href="" class="btn btn-xs btn-default text-warning mx-1 shadow" title="Detalhes">
                                <i class="fa fa-lg fa-fw fa-eye"></i></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $pacientes->links() }}
    </div>
    @stop
</form>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
