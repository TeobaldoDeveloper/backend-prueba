@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'Ciudad create')

@section('content')
    <h1>Aquí podra Crear una ciudad</h1>
    <br>
    <form action="{{route('ciudades.store')}}" method="POST">
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
