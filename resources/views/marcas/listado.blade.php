@extends('adminlte::page')

@section('title', 'Marcas')

@section('content_header')
    <h1>Listado de Marcas</h1>
@stop

@section('content')

    

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">ID Marca</th>
            <th scope="col">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            
            @foreach($brand as $f)
            <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$f->idMarca}}</td>
            <td>{{$f->descripcion}}</td>
            
            @php
                $i = $i + 1;
            @endphp
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop