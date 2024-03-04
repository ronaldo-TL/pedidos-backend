<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json(['data' => $usuarios], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $usuario = Usuario::create($request->all());
        return response()->json(['data' => $usuario], Response::HTTP_CREATED);
    }

    public function show(Usuario $usuario)
    {
        return response()->json(['data' => $usuario], Response::HTTP_OK);
    }

    public function update(Request $request, Usuario $usuario)
    {
        $usuario->update($request->all());
        return response()->json(['data' => $usuario], Response::HTTP_OK);
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
