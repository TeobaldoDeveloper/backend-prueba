@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'concesionarios')

@section('content')
    <h1>Bienvenido a la página ppal de concesionarios</h1>
    <a href="{{route('concesionarios.create')}}">Crear concesionario</a>
    <ul>
        @foreach ($concesionario as $item)
            <li><a href="{{route('concesionarios.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$concesionario->links()}}
@endsection
