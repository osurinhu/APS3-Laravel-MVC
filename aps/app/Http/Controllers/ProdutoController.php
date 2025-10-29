<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        $categorias = Categoria::all();

        return view('produtos', compact('categorias'), compact('produtos'));
    }

    public function store(Request $request){
        // Validação
        $validated = $request->validate([
        'nome' => 'required|max:255',
        'categoria' => 'required|exists:categorias,id',
        ]);

        // Inserção
        Produto::create([
            'nome'=>$request->input('nome'),
            'categoria_id'=>$request->input('categoria')
        ]);

        return redirect(url()->route('produtos.index'));

    }
}
