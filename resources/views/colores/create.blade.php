@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'Colors create')

@section('content')
    <h1>Aquí podra Crear un Color</h1>
    <br>
    <form action="{{route('colores.store')}}" method="POST">
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
