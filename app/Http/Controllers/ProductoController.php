<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return response()->json(['data' => $productos], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $producto = Producto::create($request->all());
        return response()->json(['data' => $producto], Response::HTTP_CREATED);
    }

    public function show(Producto $producto)
    {
        return response()->json(['data' => $producto], Response::HTTP_OK);
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all());
        return response()->json(['data' => $producto], Response::HTTP_OK);
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
