@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'tipomarcas')

@section('content')
    <h1>Bienvenido a la página ppal de tipomarcas</h1>
    <a href="{{route('tipomarcas.create')}}">Crear tipomarca</a>
    <ul>
        @foreach ($tipomarca as $item)
            <li><a href="{{route('tipomarcas.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$tipomarca->links()}}
@endsection
