<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return response()->json(['data' => $pedidos], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        try {
            $pedido = Pedido::create($request->all());
            return response()->json(['data' => $pedido], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear el pedido: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show(Pedido $pedido)
    {
        return response()->json(['data' => $pedido], Response::HTTP_OK);
    }

    public function update(Request $request, Pedido $pedido)
    {
        try {
            $pedido->update($request->all());
            return response()->json(['data' => $pedido], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al actualizar el pedido: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function destroy(Pedido $pedido)
    {
        try {
            $pedido->delete();
            return response()->json(['message' => 'Pedido eliminado exitosamente'], Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al eliminar el pedido: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
