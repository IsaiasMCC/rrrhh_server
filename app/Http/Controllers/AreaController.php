<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::all();
        return response()->json([
            'status' => true,
            'data' => $areas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        try {
            $area = new Area();
            $area->nombre = $request->nombre;
            $area->descripcion = $request->descripcion;
            $area->save();
            return response()->json([
                'status' => true,
                'data' => "Area Agregada correctamente"
            ]);


        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'data' => null
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $area = Area::find($id);
        if( isset($area)){
            $area->delete();
            $areas = Area::all();
            return response()->json([
                'status' => true,
                'data' => $areas
            ]);
        }

        return response()->json([
            'status' => false,
            'data' => null
        ]);
    }
}
