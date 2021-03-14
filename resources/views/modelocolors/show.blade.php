@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'modelocolors'.$modelocolor->name)

@section('content')
    <a href="{{route('modelocolors.index')}}">Volver a modelocolors</a>
    <br>
    <a href="{{route('modelocolors.edit', $modelocolor)}}">Editar modelocolor</a>
    <h1>Bienvenido a la de {{$modelocolor->name}}

@endsection
