<?php

namespace App\Http\Controllers;
use App\Models\Marca;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(){
        $marca = Ciudad::orderBy('id','desc')->paginate();
        return view('marcas.index', compact('tipo'));
    }
    public function create(){
        return view('marcas.create');
    }

    public function store(Request $request){
        $marca = new Ciudad();
        $marca->name = $request->name;
        $marca->pais_id = 1;
        $marca->save();
        return redirect()->route('marcas.show', $marca->id);
    }

    public function show(Ciudad $marca){
        return view('marcas.show',compact('tipo'));
    }

    public function edit(Ciudad $marca){
        return view('marcas.edit',compact('tipo'));
    }

    public function update(Request $request, Ciudad $marca){
        $marca->name = $request->name;
        $marca->save();
        return redirect()->route('marcas.show', $marca->id);
    }
}
