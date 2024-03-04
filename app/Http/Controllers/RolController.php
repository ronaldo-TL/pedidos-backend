<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RolController extends Controller
{
    public function index()
    {
        $roles = Rol::all();
        return response()->json(['data' => $roles], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $rol = Rol::create($request->all());
        return response()->json(['data' => $rol], Response::HTTP_CREATED);
    }

    public function show(Rol $rol)
    {
        return response()->json(['data' => $rol], Response::HTTP_OK);
    }

    public function update(Request $request, Rol $rol)
    {
        $rol->update($request->all());
        return response()->json(['data' => $rol], Response::HTTP_OK);
    }

    public function destroy(Rol $rol)
    {
        $rol->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
