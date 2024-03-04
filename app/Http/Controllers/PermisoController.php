<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PermisoController extends Controller
{
    public function index()
    {
        $permisos = Permiso::all();
        return response()->json(['data' => $permisos], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $permiso = Permiso::create($request->all());
        return response()->json(['data' => $permiso], Response::HTTP_CREATED);
    }

    public function show(Permiso $permiso)
    {
        return response()->json(['data' => $permiso], Response::HTTP_OK);
    }

    public function update(Request $request, Permiso $permiso)
    {
        $permiso->update($request->all());
        return response()->json(['data' => $permiso], Response::HTTP_OK);
    }

    public function destroy(Permiso $permiso)
    {
        $permiso->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
