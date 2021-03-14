@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'paises'.$paise->name)

@section('content')
    <a href="{{route('paises.index')}}">Volver a paises</a>
    <br>
    <a href="{{route('paises.edit', $paise)}}">Editar País</a>
    <h1>Bienvenido al país {{$paise->name}}

@endsection
