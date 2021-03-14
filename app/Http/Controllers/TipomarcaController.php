<?php

namespace App\Http\Controllers;
use App\Models\Tipomarca;

use Illuminate\Http\Request;

class TipomarcaController extends Controller
{
    public function index(){
        $tipomarca = Ciudad::orderBy('id','desc')->paginate();
        return view('tipomarcas.index', compact('tipo'));
    }
    public function create(){
        return view('tipomarcas.create');
    }

    public function store(Request $request){
        $tipomarca = new Ciudad();
        $tipomarca->name = $request->name;
        $tipomarca->pais_id = 1;
        $tipomarca->save();
        return redirect()->route('tipomarcas.show', $tipomarca->id);
    }

    public function show(Ciudad $tipomarca){
        return view('tipomarcas.show',compact('tipo'));
    }

    public function edit(Ciudad $tipomarca){
        return view('tipomarcas.edit',compact('tipo'));
    }

    public function update(Request $request, Ciudad $tipomarca){
        $tipomarca->name = $request->name;
        $tipomarca->save();
        return redirect()->route('tipomarcas.show', $tipomarca->id);
    }
}
