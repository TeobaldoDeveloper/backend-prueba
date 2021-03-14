@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'modelos')

@section('content')
    <h1>Bienvenido a la página ppal de modelos</h1>
    <a href="{{route('modelos.create')}}">Crear modelo</a>
    <ul>
        @foreach ($modelo as $item)
            <li><a href="{{route('modelos.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$modelo->links()}}
@endsection
