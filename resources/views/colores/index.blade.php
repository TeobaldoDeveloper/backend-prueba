@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'Colores')

@section('content')
    <h1>Bienvenido a la página ppal de colores</h1>
    <a href="{{route('colores.create')}}">Crear Color</a>
    <ul>
        @foreach ($colore as $item)
            <li><a href="{{route('colores.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$colore->links()}}
@endsection
