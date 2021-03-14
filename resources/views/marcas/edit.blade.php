@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'Ciudad edit')

@section('content')
    <h1>Aquí podras Editar una ciudad</h1>
    <br>
    <form action="{{route('marcas.update',$marca)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$marca->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
