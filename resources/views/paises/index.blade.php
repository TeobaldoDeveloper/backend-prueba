@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'paises')

@section('content')
    <h1>Bienvenido a la página ppal de paises</h1>
    <a href="{{route('paises.create')}}">Crear País</a>
    <ul>
        @foreach ($paise as $item)
            <li><a href="{{route('paises.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$paise->links()}}
@endsection
