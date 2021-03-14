@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'modelocolors')

@section('content')
    <h1>Bienvenido a la página ppal de modelocolors</h1>
    <a href="{{route('modelocolors.create')}}">Crear modelocolor</a>
    <ul>
        @foreach ($modelocolor as $item)
            <li><a href="{{route('modelocolors.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$modelocolor->links()}}
@endsection
