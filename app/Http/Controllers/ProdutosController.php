<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produtos::orderBy('id', 'desc')->get();
        return response()->json($produtos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produtos = new Produtos;
        $produtos->nome = $request->nome;
        $produtos->tipo = $request->tipo;
        $produtos->preco = $request->preco;
        $produtos->save();
        return response()->json($produtos);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produtos = Produtos::findOrFail($id);
        return response()->json($produtos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produtos = Produtos::findOrFail($id);
        $produtos->nome = $request->nome;
        $produtos->tipo = $request->tipo;
        $produtos->preco = $request->preco;
        $produtos->save();
        return response()->json($produtos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produtos = Produtos::findOrFail($id);
        $produtos->delete();
        return response()->json($produtos);
    }
}
