<?php

namespace App\Http\Controllers;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    // public function index(){
    //     $colore = Color::orderBy('id','desc')->paginate();
    //     return view('colores.index', compact('colore'));
    // }

    public function index(){
        $colore = Color::orderBy('id','desc')->paginate();
        return response()->json($colore);
    }

    public function create(){
        return view('colores.create');
    }

    public function store(Request $request){
        $colore = new Color();
        $colore->name = $request->name;
        $colore->save();
        return redirect()->route('colores.show', $colore->id);
    }

    public function show(Color $colore){
        // $colore = Color::find($id);
        return view('colores.show',compact('colore'));
    }

    public function edit(Color $colore){
        return view('colores.edit',compact('colore'));
    }

    public function update(Request $request, Color $colore){
        $colore->name = $request->name;
        $colore->save();
        return redirect()->route('colores.show', $colore->id);
    }
}
