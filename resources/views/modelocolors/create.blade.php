@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'modelocolor create')

@section('content')
    <h1>Aquí podra Crear una modelocolor</h1>
    <br>
    <form action="{{route('modelocolors.store')}}" method="POST">
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
