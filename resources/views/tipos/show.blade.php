@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'tipos'.$tipo->name)

@section('content')
    <a href="{{route('tipos.index')}}">Volver a tipos</a>
    <br>
    <a href="{{route('tipos.edit', $tipo)}}">Editar tipo</a>
    <h1>Bienvenido a la de {{$tipo->name}}

@endsection
