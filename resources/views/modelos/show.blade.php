@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'modelos'.$modelo->name)

@section('content')
    <a href="{{route('modelos.index')}}">Volver a modelos</a>
    <br>
    <a href="{{route('modelos.edit', $modelo)}}">Editar modelo</a>
    <h1>Bienvenido a la de {{$modelo->name}}

@endsection
