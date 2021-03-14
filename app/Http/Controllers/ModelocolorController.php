<?php

namespace App\Http\Controllers;
use App\Models\Modelocolor;

use Illuminate\Http\Request;

class ModelocolorController extends Controller
{
    public function index(){
        $modelocolor = Ciudad::orderBy('id','desc')->paginate();
        return view('modelocolors.index', compact('tipo'));
    }
    public function create(){
        return view('modelocolors.create');
    }

    public function store(Request $request){
        $modelocolor = new Ciudad();
        $modelocolor->name = $request->name;
        $modelocolor->pais_id = 1;
        $modelocolor->save();
        return redirect()->route('modelocolors.show', $modelocolor->id);
    }

    public function show(Ciudad $modelocolor){
        return view('modelocolors.show',compact('tipo'));
    }

    public function edit(Ciudad $modelocolor){
        return view('modelocolors.edit',compact('tipo'));
    }

    public function update(Request $request, Ciudad $modelocolor){
        $modelocolor->name = $request->name;
        $modelocolor->save();
        return redirect()->route('modelocolors.show', $modelocolor->id);
    }
}
