@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'vehiculos')

@section('content')
    <h1>Bienvenido a la página ppal de vehiculos</h1>
    <a href="{{route('vehiculos.create')}}">Crear vehiculos</a>
    <ul>
        @foreach ($vehiculo as $item)
            <li><a href="{{route('vehiculos.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$vehiculo->links()}}
@endsection
