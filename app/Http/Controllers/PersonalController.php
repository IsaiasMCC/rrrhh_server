<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personales = Personal::all();
        return response()->json([
            'status' => true,
            'data' => $personales
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
            'fecha_nacimiento' => 'required',
            'ci' => 'required',
            'domicilio' => 'required',
            'zona' => 'required',
            'telefono' => 'required',
            'telefono_referencia' => 'required',
            'correo' => 'required',
        ]);

        try {
            $personal = new Personal();
            $personal->nombre = $request->nombre;
            $personal->apellidos = $request->apellidos;
            $personal->fecha_nacimiento = $request->fecha_nacimiento;
            $personal->ci = $request->ci;
            $personal->domicilio = $request->domicilio;
            $personal->zona = $request->zona;
            $personal->telefono = $request->telefono;
            $personal->telefono_referencia = $request->telefono_referencia;
            $personal->correo = $request->correo;
            $personal->save();

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
        $personal = Personal::find($id);
        if( isset($personal)){
            $personal->delete();
            $personales = Personal::all();
            return response()->json([
                'status' => true,
                'data' => $personales
            ]);
        }

        return response()->json([
            'status' => false,
            'data' => null
        ]);
    }
}
