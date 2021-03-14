@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'modelocolor edit')

@section('content')
    <h1>Aquí podras Editar una modelocolor</h1>
    <br>
    <form action="{{route('modelocolors.update',$modelocolor)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$modelocolor->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
