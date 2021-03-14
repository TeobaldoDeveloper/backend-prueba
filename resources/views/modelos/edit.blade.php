@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'modelo edit')

@section('content')
    <h1>Aquí podras Editar una modelo</h1>
    <br>
    <form action="{{route('modelos.update',$modelo)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$modelo->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
