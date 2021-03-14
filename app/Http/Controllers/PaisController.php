<?php

namespace App\Http\Controllers;
use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    
    public function index(){
        $paise = Pais::orderBy('id','desc')->paginate();
        return view('paises.index', compact('paise'));
    }
    public function create(){
        return view('paises.create');
    }

    public function store(Request $request){
        $paise = new Pais();
        $paise->name = $request->name;
        $paise->save();
        return redirect()->route('paises.show', $paise->id);
    }

    public function show(Pais $paise){
        // $paise = Pais::find($id);
        return view('paises.show',compact('paise'));
    }

    public function edit(Pais $paise){
        return view('paises.edit',compact('paise'));
    }

    public function update(Request $request, Pais $paise){
        $paise->name = $request->name;
        $paise->save();
        return redirect()->route('paises.show', $paise->id);
    }
}
