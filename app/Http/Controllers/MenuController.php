<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return response()->json(['data' => $menus], Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->all());
        return response()->json(['data' => $menu], Response::HTTP_CREATED);
    }

    public function show(Menu $menu)
    {
        return response()->json(['data' => $menu], Response::HTTP_OK);
    }

    public function update(Request $request, Menu $menu)
    {
        $menu->update($request->all());
        return response()->json(['data' => $menu], Response::HTTP_OK);
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
