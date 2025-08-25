<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Produto::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return response()->json($produto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Produto::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update($request->all());
        return $produto;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Produto::destroy($id);
        return response()->json(null, 204);
    }
}
