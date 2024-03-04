<?php

namespace App\Http\Controllers;

use App\Models\HistorialCantidad;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HistorialCantidadController extends Controller
{
    public function index()
    {
        $historiales = HistorialCantidad::all();
        return response()->json(['data' => $historiales], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $historial = HistorialCantidad::create($request->all());
        return response()->json(['data' => $historial], Response::HTTP_CREATED);
    }

    public function show(HistorialCantidad $historial)
    {
        return response()->json(['data' => $historial], Response::HTTP_OK);
    }

    public function update(Request $request, HistorialCantidad $historial)
    {
        $historial->update($request->all());
        return response()->json(['data' => $historial], Response::HTTP_OK);
    }

    public function destroy(HistorialCantidad $historial)
    {
        $historial->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

