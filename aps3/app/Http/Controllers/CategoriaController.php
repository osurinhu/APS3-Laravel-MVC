<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();

        return view('categorias', compact('categorias'));
    }

    public function insert(Request $request){

        Categoria::create([
            'nome'=>$request->input('nome')
        ]);

        return redirect(url()->current());

    }
}
