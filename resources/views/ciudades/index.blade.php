@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'ciudades')

@section('content')
    <h1>Bienvenido a la página ppal de ciudades</h1>
    <a href="{{route('ciudades.create')}}">Crear Ciudad</a>
    <ul>
        @foreach ($ciudade as $item)
            <li><a href="{{route('ciudades.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$ciudade->links()}}
@endsection
