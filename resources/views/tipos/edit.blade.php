@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'tipo edit')

@section('content')
    <h1>Aquí podras Editar una tipo</h1>
    <br>
    <form action="{{route('tipos.update',$tipo)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$tipo->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
