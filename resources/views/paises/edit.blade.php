@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'País edit')

@section('content')
    <h1>Aquí podras Editar un País</h1>
    <br>
    <form action="{{route('paises.update',$paise)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$paise->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
