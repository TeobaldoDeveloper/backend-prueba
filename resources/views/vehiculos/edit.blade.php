@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'vehiculo edit')

@section('content')
    <h1>Aquí podras Editar una vehiculo</h1>
    <br>
    <form action="{{route('vehiculos.update',$vehiculo)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$vehiculo->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
