@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'tipos')

@section('content')
    <h1>Bienvenido a la página ppal de tipos</h1>
    <a href="{{route('tipos.create')}}">Crear tipo</a>
    <ul>
        @foreach ($tipo as $item)
            <li><a href="{{route('tipos.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$tipo->links()}}
@endsection
