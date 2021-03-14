@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'clientes'.$cliente->name)

@section('content')
    <a href="{{route('clientes.index')}}">Volver a clientes</a>
    <br>
    <a href="{{route('clientes.edit', $cliente)}}">Editar cliente</a>
    <h1>Bienvenido a la de {{$cliente->name}}

@endsection
