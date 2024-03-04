<?php

namespace App\Http\Controllers;

use App\Models\RolMenu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RolMenuController extends Controller
{
    public function index()
    {
        $rolMenus = RolMenu::all();
        return response()->json(['data' => $rolMenus], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $rolMenu = RolMenu::create($request->all());
        return response()->json(['data' => $rolMenu], Response::HTTP_CREATED);
    }

}
