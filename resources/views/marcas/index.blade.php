@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'marcas')

@section('content')
    <h1>Bienvenido a la página ppal de marcas</h1>
    <a href="{{route('marcas.create')}}">Crear marca</a>
    <ul>
        @foreach ($marca as $item)
            <li><a href="{{route('marcas.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$marca->links()}}
@endsection
