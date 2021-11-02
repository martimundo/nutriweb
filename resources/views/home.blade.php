@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>AppNutri Sua Gestão Nutricional.</p>
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Usuário</h3>
                            <p>Usuários Total</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais detalhes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Cardapios</h3>
                            <p>Nossos Cardapios</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{url('/admin/cardapios/list')}}" class="small-box-footer">Mais detalhes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>Paciente</h3>
                            <p>Pacientes Cadastrados</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{url('/admin/pacientes/listar')}}" class="small-box-footer">Mais detalhes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Inativos</h3>
                            <p>Usuários Inativos</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais detalhes <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Listagem de Pacientes</h3>

                            <div class="card-tools">
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="#" class="btn btn-tool btn-sm">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>

                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle table-responsive">
                                <thead>
                                    <tr>
                                        <th>Cod. Paciente</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Idade</th>
                                        <th>Genero</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $dado)
                                        <tr>
                                            <td>{{ $dado->id }}</td>
                                            <td>{{ $dado->nome }}</td>
                                            <td>{{ $dado->eail }}</td>
                                            <td>{{ $dado->idade }}</td>
                                            <td>{{ $dado->genero }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-felx justify-content-center">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-shield"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Nutricionistras</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-default elevation-1"><i class="fas fa-users"></i></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Usuários padrão</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-male"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pacientes Masculino</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1" style="background-color: #96509c!important;"><i
                                class="fas fa-female"></i></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pacientes Feminino</span>
                            <span class="info-box-number"></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
