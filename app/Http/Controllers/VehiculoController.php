<?php

namespace App\Http\Controllers;
use App\Models\Vehiculo;

use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(){
        $vehiculo = Ciudad::orderBy('id','desc')->paginate();
        return view('vehiculos.index', compact('vehiculo'));
    }
    public function create(){
        return view('vehiculos.create');
    }

    public function store(Request $request){
        $vehiculo = new Ciudad();
        $vehiculo->placa = $request->placa;
        $vehiculo->pais_id = 1;
        $vehiculo->save();
        return redirect()->route('vehiculos.show', $vehiculo->id);
    }

    public function show(Ciudad $vehiculo){
        return view('vehiculos.show',compact('vehiculo'));
    }

    public function edit(Ciudad $vehiculo){
        return view('vehiculos.edit',compact('vehiculo'));
    }

    public function update(Request $request, Ciudad $vehiculo){
        $vehiculo->placa = $request->placa;
        $vehiculo->save();
        return redirect()->route('vehiculos.show', $vehiculo->id);
    }
}
