@extends('adminlte::page')

@section('title', 'Nutricionistas')

@section('content_header')
    <div class="jumbotron jumbotron-fluid bg-gradient-lightblue rounded">
        <div class="container">
            <h4 class="display-6">Relação de Nutricionistas</h4>
        </div>
    </div>
@stop
@section('content')
    <a href="{{ url('admin/nutricionistas') }}" class="btn btn-xs btn-default text-primary mx-1 shadow"><i
            class="fa fa-lg fa-fw fa-plus"></i>Nutricionistas</a>

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
        <table class="table table-sm table-striped table-valign-middle table-responsive ">
            <thead>
                <tr>
                    <th scope="col">Cod</th>
                    <th scope="col">Foto</th>
                    <th scope="col">CRN</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $nutricionistas as $nutricionista )
                    <tr>
                        <td>{{ $nutricionista->id }}</td>
                        <td><img class="img-thumbnail img-fluid" src="{{asset('storage'). '/'.$nutricionista->foto}}" width="100" alt=""></td>
                        <td>{{ $nutricionista->crn}}</td>
                        <td>{{ $nutricionista->nome }}</td>
                        <td><a href=""
                                class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </a>
                        </td>
                        <td>
                            <a href=""
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
        {{$nutricionistas->links()}}
    </div>
    @stop
</form>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
