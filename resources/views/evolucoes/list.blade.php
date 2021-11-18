@extends('adminlte::page')

@section('title', 'Listagem de Evoluções')

@section('content_header')
    <div class="jumbotron jumbotron-fluid bg-gradient-lightblue rounded">
        <div class="container">
            <h4 class="display-6">Listagem de Evoluções</h4>
        </div>
    </div>
@stop
@section('content')

    <a href="{{ url('admin/evolucoes') }}" class="btn btn-xs btn-default text-primary mx-1 shadow"><i
            class="fa fa-lg fa-fw fa-arrow-left"></i>Inicio</a>
    <div class="card-body table-responsive p-0">
        <table class="table table-xl table-striped table-responsive table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Cod</th>
                    <th>Dific.Alimentar</th>
                    <th>Circ.Cintura</th>
                    <th>Circ.Quadril</th>
                    <th>Altura</th>
                    <th>Doenças Existentes</th>
                    <th>Peso</th>
                    <th>Pref.Alimentar</th>
                    <th>Intolerancia</th>
                    <th>Aversões</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evolucoes as $item)
                    <tr scope="row">
                        <td >{{ $item->id }}</td>
                        <td>{{ $item->dific_alimentar}}</td>
                        <td>{{ $item->circ_cintura}}</td>
                        <td>{{ $item->circ_quadril}}</td>
                        <td>{{ $item->altura}}</td>
                        <td style="WIDTH:200px">{{ $item->doencas_exist}}</td>
                        <td>{{ $item->peso}}</td>
                        <td>{{ $item->pref_alimentar}}</td>
                        <td>{{ $item->intolerancia}}</td>
                        <td>{{ $item->aversoes}}</td>
                        <td>
                        <a href="{{ url('admin/evolucoes/index') }}" class="btn btn-info btn-sm"></i>Novo</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/evolucoes/'.$item->id.'/editar' )}}" class="btn btn-primary btn-sm">Editar</a>

                        </td>
                        <td>
                            <a href="{{ url('admin/evolucoes/'.$item->id.'/delete' )}}" class="btn btn-danger btn-sm">Deletar</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $evolucoes->links() }}
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
@stop
