@extends('adminlte::page')

@section('title', 'Cardapios')

@section('content_header')
    <div class="jumbotron jumbotron-fluid bg-gradient-lightblue rounded">
        <div class="container">
            <h4 class="display-6">Lista de Cardapios</h4>
        </div>
    </div>
@stop
@section('content')
    <a href="{{ url('admin/cardapios/create') }}" class="btn btn-xs btn-default text-primary mx-1 shadow"><i
            class="fa fa-lg fa-fw fa-plus"></i>Novo Cardapio</a>
    <a href="{{ url('admin/cardapios/list') }}" class="btn btn-xs btn-default text-primary mx-1 shadow"><i
            class="fa fa-lg fa-fw fa-arrow-left"></i>Inicio</a>
    <div class="card-body table-responsive p-0">
        <table class="table table-sm table-striped table-valign-middle table-responsive">
            <thead>
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Nome Cardapio</th>
                    <th scope="col">Descrição Cardapio</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cardapios as $item)
                    <tr>
                        <td>{{ $item->id_cardapios }}</td>
                        <td>{{ $item->nome_cardapio }}</td>
                        <td>{{ $item->desc_cardapio }}</td>
                        <td><a href="{{ url('admin/cardapios/' . $item->id_cardapios . '/edit') }}"
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                                <i class="fa fa-lg fa-fw fa-pen"></i></a></td>
                        <td>
                            <form action="{{ url('admin/funcionarios/' . $item->id_cardapios) }}" method="POST">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Deletar">
                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </td>
                        <td><a href="{{ url('/cardapios/' . $item->id_cardapios . '/edit') }}"
                                class="btn btn-xs btn-default text-teal mx-1 shadow" title="Detalhes">
                                <i class="fa fa-lg fa-fw fa-eye"></i></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $cardapios->links() }}
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
@stop
