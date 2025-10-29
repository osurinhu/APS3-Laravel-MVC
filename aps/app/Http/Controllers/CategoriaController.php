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

    public function store(Request $request){
        // Validação
        $validated = $request->validate([
        'nome' => 'required|max:255',
        ]);

        // Inserção
        Categoria::create([
            'nome'=>$request->input('nome')
        ]);     

        return redirect(url()->route('categorias.index'));

    }
}
