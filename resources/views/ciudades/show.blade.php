@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'ciudades'.$ciudade->name)

@section('content')
    <a href="{{route('ciudades.index')}}">Volver a ciudades</a>
    <br>
    <a href="{{route('ciudades.edit', $ciudade)}}">Editar Ciudad</a>
    <h1>Bienvenido a la de {{$ciudade->name}}

@endsection
