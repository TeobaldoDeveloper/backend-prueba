<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concesionario;

class ConcesionarioController extends Controller
{
    public function index(){
        $concesionario = Ciudad::orderBy('id','desc')->paginate();
        return view('concesionarios.index', compact('concesionario'));
    }
    public function create(){
        return view('concesionarios.create');
    }

    public function store(Request $request){
        $concesionario = new Ciudad();
        $concesionario->name = $request->name;
        $concesionario->pais_id = 1;
        $concesionario->save();
        return redirect()->route('concesionarios.show', $concesionario->id);
    }

    public function show(Ciudad $concesionario){
        return view('concesionarios.show',compact('concesionario'));
    }

    public function edit(Ciudad $concesionario){
        return view('concesionarios.edit',compact('concesionario'));
    }

    public function update(Request $request, Ciudad $concesionario){
        $concesionario->name = $request->name;
        $concesionario->save();
        return redirect()->route('concesionarios.show', $concesionario->id);
    }
}
