
@extends('adminlte::page')

@section('title', 'Articulos')

@section('content_header')
    <h1>Listado de Articulos</h1>
@stop

@section('content')


    <div style="text-align: right;">
        <a href="/docentes/registrar" type="button" class="btn btn-success">Registrar</a>
    </div>
    <br>

    <div class="row">
        @foreach($article as $p)
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $p->foto) }}" class="card-img-top" alt="Image" style="height: 350px; object-fit: cover;">

                <div class="card-body ">
                    <p class="card-text ">
                        <strong>Referencia:</strong> {{$p->referencia}}<br>
                        <strong>Nombre:</strong> {{$p->nombre}}<br>
                        <strong>Descripción:</strong> {{$p->descripcion}}<br>
                        <strong>Color:</strong> {{$p->color}}<br>
                        <strong>Precio Unitario:</strong> {{$p->precioUnitario}}<br>
                        <strong>Observación:</strong> {{$p->observacion}}<br>
                        <strong>Marca:</strong> {{$p->marca}}<br>
                    </p>

                </div>
            </div>
        </div>
        @endforeach
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


