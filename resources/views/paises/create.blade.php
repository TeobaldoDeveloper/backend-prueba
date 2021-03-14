@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'Pais create')

@section('content')
    <h1>Aquí podra Crear un Pais</h1>
    <br>
    <form action="{{route('paises.store')}}" method="POST">
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
