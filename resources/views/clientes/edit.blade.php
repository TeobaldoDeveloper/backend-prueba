@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'cliente edit')

@section('content')
    <h1>Aquí podras Editar un cliente</h1>
    <br>
    <form action="{{route('clientes.update',$cliente)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$cliente->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
