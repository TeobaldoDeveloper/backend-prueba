@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'cliente create')

@section('content')
    <h1>Aquí podra Crear un cliente</h1>
    <br>
    <form action="{{route('clientes.store')}}" method="POST">
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
