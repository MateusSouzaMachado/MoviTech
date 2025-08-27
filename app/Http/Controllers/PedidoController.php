<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pedido = Pedido::create([
            'user_id' => $request->user_id,
            // outros campos do pedido
        ]);
    
        foreach ($request->itens as $item) {
            ItemPedido::create([
                'pedido_id' => $pedido->id,
                'produto_id' => $item['produto_id'],
                'quantidade' => $item['quantidade'],
                // outros campos do item
            ]);
        }
    
        return response()->json($pedido->load('itensPedido'), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
