@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'marca create')

@section('content')
    <h1>Aquí podra Crear una marca</h1>
    <br>
    <form action="{{route('marcas.store')}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}

        <label>
            Nombre: 
            <input type="text" name="name">
        </label>
        <br>
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection
