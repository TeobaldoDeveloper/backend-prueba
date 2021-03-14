@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'Colors edit')

@section('content')
    <h1>Aquí podras Editar un Color</h1>
    <br>
    <form action="{{route('colores.update',$colore)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$colore->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
