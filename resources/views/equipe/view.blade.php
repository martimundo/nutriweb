@extends('adminlte::page')

@section('title', 'Nutricionistas')

@section('content_header')

@stop

@section('content')
<x-adminlte-profile-widget name="Roxana Saziadko" desc="Graphic Designer"

class="elevation-4"
    img="https://picsum.photos/id/1027/100" cover="https://picsum.photos/id/130/550/200"
    layout-type="classic" header-class="text-right" footer-class="bg-gradient-teal">
    <x-adminlte-profile-col-item class="border-right text-dark" icon="fas fa-lg fa-tasks"
        title="Projects Done" text="25" size=6 badge="lime"/>
    <x-adminlte-profile-col-item class="text-dark" icon="fas fa-lg fa-tasks"
        title="Projects Pending" text="5" size=6 badge="danger"/>
    <x-adminlte-profile-row-item title="Contact me on:" class="text-center text-dark border-bottom"/>
    <x-adminlte-profile-row-item icon="fab fa-fw fa-2x fa-instagram text-dark" title="Instagram"
        url="#" size=4/>
    <x-adminlte-profile-row-item icon="fab fa-fw fa-2x fa-facebook text-dark" title="Facebook"
        url="#" size=4/>
    <x-adminlte-profile-row-item icon="fab fa-fw fa-2x fa-twitter text-dark" title="Twitter"
        url="#" size=4/>
</x-adminlte-profile-widget>
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
