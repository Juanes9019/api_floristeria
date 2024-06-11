<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        $i = 0; 
        return view('Admin.pedido.index', compact('pedidos', 'i'));
    }

    public function cambiar_estado(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);

        if ($pedido->estado === 'nuevo') {
            $pedido->estado = 'preparacion';
        } elseif ($pedido->estado === 'preparacion') {
            $pedido->estado = 'en camino';
        } elseif ($pedido->estado === 'en camino') {
            $pedido->estado = 'entregado';
        }

        $pedido->save();

        return redirect()->back()->with('success', 'Estado del pedido actualizado correctamente.');
    }

    public function mostrar($id)
    {
        $pedido = Pedido::with('detalles.producto')->findOrFail($id);
        $i = 0; 
        return view('Admin.pedido.mostrar', compact('pedido','i'));
    }
}

