<?php

namespace App\Http\Controllers;
use App\Models\Modelo;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function index(){
        $modelo = Ciudad::orderBy('id','desc')->paginate();
        return view('modelos.index', compact('tipo'));
    }
    public function create(){
        return view('modelos.create');
    }

    public function store(Request $request){
        $modelo = new Ciudad();
        $modelo->name = $request->name;
        $modelo->pais_id = 1;
        $modelo->save();
        return redirect()->route('modelos.show', $modelo->id);
    }

    public function show(Ciudad $modelo){
        return view('modelos.show',compact('tipo'));
    }

    public function edit(Ciudad $modelo){
        return view('modelos.edit',compact('tipo'));
    }

    public function update(Request $request, Ciudad $modelo){
        $modelo->name = $request->name;
        $modelo->save();
        return redirect()->route('modelos.show', $modelo->id);
    }
}
