@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'clientes')

@section('content')
    <h1>Bienvenido a la página ppal de clientes</h1>
    <a href="{{route('clientes.create')}}">Crear cliente</a>
    <ul>
        @foreach ($cliente as $item)
            <li><a href="{{route('clientes.show', $item)}}">{{$item->name}}</a></li>
        @endforeach
    </ul>
    {{$cliente->links()}}
@endsection
