<?php

namespace App\Http\Controllers;
use App\Models\Tipo;

use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index(){
        $tipo = Ciudad::orderBy('id','desc')->paginate();
        return view('tipos.index', compact('tipo'));
    }
    public function create(){
        return view('tipos.create');
    }

    public function store(Request $request){
        $tipo = new Ciudad();
        $tipo->name = $request->name;
        $tipo->pais_id = 1;
        $tipo->save();
        return redirect()->route('tipos.show', $tipo->id);
    }

    public function show(Ciudad $tipo){
        return view('tipos.show',compact('tipo'));
    }

    public function edit(Ciudad $tipo){
        return view('tipos.edit',compact('tipo'));
    }

    public function update(Request $request, Ciudad $tipo){
        $tipo->name = $request->name;
        $tipo->save();
        return redirect()->route('tipos.show', $tipo->id);
    }
}
