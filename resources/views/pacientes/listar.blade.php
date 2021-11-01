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
        <table class="table table-sm table-striped table-valign-middle table-responsive">
            <thead>
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Nome Paciente</th>
                    <th scope="col">Email do Paciente</th>
                    <th scope="col">Idade do Paciente</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $item)
                    <tr>
                        <td>{{ $item->id_paciente }}</td>
                        <td>{{ $item->nome }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->idade }}</td>
                        <td><a href="{{ url('/pacientes' . $item->id_paciente . '/edit') }}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('/pacientes' . $item->id_paciente) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Deletar">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </td>
                        <td><a href="{{ url('/pacientes' . $item->id_paciente . '/edit') }}"
                                class="btn btn-xs btn-default text-teal mx-1 shadow" title="Detalhes">
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
