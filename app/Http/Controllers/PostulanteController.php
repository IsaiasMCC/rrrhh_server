<?php

namespace App\Http\Controllers;

use App\Models\Postulante;
use Illuminate\Http\Request;

class PostulanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postulante = Postulante::all();
        return response()->json([
            'status' => true,
            'data' => $postulante
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'fecha_postulacion' => 'required',
            'cargo' => 'required',
        ]);

        try {
            $postulante = new Postulante();
            $postulante->nombre = $request->nombre;
            $postulante->apellidos = $request->apellidos;
            $postulante->fecha_postulacion = $request->fecha_postulacion;
            $postulante->cargo = $request->cargo;
            $postulante->save();

            return response()->json([
                'status' => true,
                'data' => null
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
        $postulante = Postulante::find($id);
        if( isset($postulante)){
            $postulante->delete();
            $postulantes = Postulante::all();
            return response()->json([
                'status' => true,
                'data' => $postulantes
            ]);
        }

        return response()->json([
            'status' => false,
            'data' => null
        ]);
    }
}
