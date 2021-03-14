@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'marcas'.$marca->name)

@section('content')
    <a href="{{route('marcas.index')}}">Volver a marcas</a>
    <br>
    <a href="{{route('marcas.edit', $marca)}}">Editar marca</a>
    <h1>Bienvenido a la de {{$marca->name}}

@endsection
