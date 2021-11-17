<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends  Controller
{
    protected String $classe;
    public function index(Request $request)
    {
        //return $this->classe::all();
        return $this->classe::paginate($request->per_page);
    }

    public function store(Request $request)
    {
        return response()->json($this->classe::create($request->all() ),201 );
    }

    public function show(int $id)
    {
        $recurso = $this->classe::find($id);

        if(is_null($recurso)){
            return "Não encontrei nada";
        }

        return response()->json($recurso, 200);
    }

    public function update(Request $request, int $id)
    {
        $recurso = $this->classe::find($id);

        if(is_null($recurso)){
            return response()->json(['erro'=>"Recurso não encontrado"],404);
        }

        //$serie->nome = $request->nome;
        $recurso->fill($request->all());
        $recurso->save();

        return $recurso;
    }

    public function delete(int $id)
    {
        //$serie = $this->>classe::find($id);

        $qtdRecursosRemovidos = $this->classe::destroy($id);

        if($qtdRecursosRemovidos === 0){
            return response()->json(['erro'=>"Recurso não encontrado"],404);
        }

        //$serie->delete();

        return response()->json('',204);

    }
}
