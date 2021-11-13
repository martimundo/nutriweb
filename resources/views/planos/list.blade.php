@extends('adminlte::page')

@section('title', 'Listagem de Planos')

@section('content_header')
    <div class="jumbotron jumbotron-fluid bg-gradient-lightblue rounded">
        <div class="container">
            <h4 class="display-6">Listagem de Planos</h4>
        </div>
    </div>
@stop
@section('content')

    <a href="{{ url('admin/planos/index') }}" class="btn btn-xs btn-default text-primary mx-1 shadow"><i
            class="fa fa-lg fa-fw fa-arrow-left"></i>Inicio</a>
    <div class="card-body table-responsive p-0">
        <table class="table table-sm table-striped table-valign-middle table-responsive">
            <thead>
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Nome do Plano</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($planos as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->desc_plano}}</td>
                        <td>
                            <a href="{{ url('admin/planos/index') }}" class="btn btn-info btn-sm">
                                <i class="fa fa-lg fa-fw fa-plus"></i>Novo</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/planos/'.$item->id.'/editar' )}}" class="btn btn-primary btn-sm">
                            <i class="fa fa-lg fa-fw fa-pen"></i>Editar</a>
                        <td>
                            <a href="{{ url('admin/planos/'.$item->id.'/delete' )}}" class="btn btn-danger btn-sm">
                            <i class="fa fa-lg fa-fw fa-trash"></i>Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $planos->links() }}
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
@stop
