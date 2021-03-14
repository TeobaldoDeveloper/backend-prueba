@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'modelo create')

@section('content')
    <h1>Aquí podra Crear una modelo</h1>
    <br>
    <form action="{{route('modelos.store')}}" method="POST">
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
