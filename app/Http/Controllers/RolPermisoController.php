<?php

namespace App\Http\Controllers;

use App\Models\RolPermiso;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RolPermisoController extends Controller
{
    public function index()
    {
        $rolPermisos = RolPermiso::all();
        return response()->json(['data' => $rolPermisos], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $rolPermiso = RolPermiso::create($request->all());
        return response()->json(['data' => $rolPermiso], Response::HTTP_CREATED);
    }

}
