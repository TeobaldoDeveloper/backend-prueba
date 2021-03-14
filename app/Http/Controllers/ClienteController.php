<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Ciudad::orderBy('id','desc')->paginate();
        return view('clientes.index', compact('cliente'));
    }
    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $cliente = new Ciudad();
        $cliente->name = $request->name;
        $cliente->pais_id = 1;
        $cliente->save();
        return redirect()->route('clientes.show', $cliente->id);
    }

    public function show(Ciudad $cliente){
        return view('clientes.show',compact('cliente'));
    }

    public function edit(Ciudad $cliente){
        return view('clientes.edit',compact('cliente'));
    }

    public function update(Request $request, Ciudad $cliente){
        $cliente->name = $request->name;
        $cliente->save();
        return redirect()->route('clientes.show', $cliente->id);
    }
}
