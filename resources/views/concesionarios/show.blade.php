@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'concesionarios'.$concesionario->name)

@section('content')
    <a href="{{route('concesionarios.index')}}">Volver a concesionarios</a>
    <br>
    <a href="{{route('concesionarios.edit', $concesionario)}}">Editar concesionario</a>
    <h1>Bienvenido a la de {{$concesionario->name}}

@endsection
