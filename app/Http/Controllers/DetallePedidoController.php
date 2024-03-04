<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DetallePedidoController extends Controller
{
    public function index()
    {
        $detallesPedido = DetallePedido::all();
        return response()->json(['data' => $detallesPedido], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $detallePedido = DetallePedido::create($request->all());
        return response()->json(['data' => $detallePedido], Response::HTTP_CREATED);
    }

    public function show(DetallePedido $detallePedido)
    {
        return response()->json(['data' => $detallePedido], Response::HTTP_OK);
    }

    public function update(Request $request, DetallePedido $detallePedido)
    {
        $detallePedido->update($request->all());
        return response()->json(['data' => $detallePedido], Response::HTTP_OK);
    }

    public function destroy(DetallePedido $detallePedido)
    {
        $detallePedido->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
