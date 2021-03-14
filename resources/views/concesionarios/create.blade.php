@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'concesionario create')

@section('content')
    <h1>Aquí podra Crear una concesionario</h1>
    <br>
    <form action="{{route('concesionarios.store')}}" method="POST">
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
