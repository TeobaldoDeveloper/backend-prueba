@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'Colores'.$colore->name)

@section('content')
    <a href="{{route('colores.index')}}">Volver a Colores</a>
    <br>
    <a href="{{route('colores.edit', $colore)}}">Editar Color</a>
    <h1>Bienvenido al color {{$colore->name}}

@endsection
