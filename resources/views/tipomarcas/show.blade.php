@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'tipomarcas'.$tipomarca->name)

@section('content')
    <a href="{{route('tipomarcas.index')}}">Volver a tipomarcas</a>
    <br>
    <a href="{{route('tipomarcas.edit', $tipomarca)}}">Editar tipomarca</a>
    <h1>Bienvenido a la de {{$tipomarca->name}}

@endsection
