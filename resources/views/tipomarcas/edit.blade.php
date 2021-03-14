@extends('layouts.plantilla') {{--  directivas de blade --}}

@section('title', 'tipomarca edit')

@section('content')
    <h1>Aquí podras Editar una tipomarca</h1>
    <br>
    <form action="{{route('tipomarcas.update',$tipomarca)}}" method="POST">
        @csrf  {{-- DIRECTIVA BLADE--}}
        @method('put')

        <label>
            Nombre: 
            <input type="text" name="name" value="{{$tipomarca->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
