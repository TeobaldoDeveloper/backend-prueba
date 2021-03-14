@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'vehiculos'.$vehiculo->name)

@section('content')
    <a href="{{route('vehiculos.index')}}">Volver a vehiculos</a>
    <br>
    <a href="{{route('vehiculos.edit', $vehiculo)}}">Editar vehiculo</a>
    <h1>Bienvenido a la de {{$vehiculo->name}}

@endsection
