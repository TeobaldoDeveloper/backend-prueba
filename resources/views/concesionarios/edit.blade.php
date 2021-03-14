@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'concesionario edit')

@section('content')
    <h1>Aquí podras Editar una concesionario</h1>
    <br>
    <form action="{{route('concesionarios.update',$concesionario)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$concesionario->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
