<?php

namespace App\Http\Controllers;
use App\Models\Ciudad;
use Illuminate\Http\Request;


class CiudadController extends Controller
{
    public function index(){
        $ciudade = Ciudad::orderBy('id','desc')->paginate();
        return view('ciudades.index', compact('ciudade'));
    }
    public function create(){
        return view('ciudades.create');
    }

    public function store(Request $request){
        $ciudade = new Ciudad();
        $ciudade->name = $request->name;
        $ciudade->pais_id = 1;
        $ciudade->save();
        return redirect()->route('ciudades.show', $ciudade->id);
    }

    public function show(Ciudad $ciudade){
        return view('ciudades.show',compact('ciudade'));
    }

    public function edit(Ciudad $ciudade){
        return view('ciudades.edit',compact('ciudade'));
    }

    public function update(Request $request, Ciudad $ciudade){
        $ciudade->name = $request->name;
        $ciudade->save();
        return redirect()->route('ciudades.show', $ciudade->id);
    }
}
