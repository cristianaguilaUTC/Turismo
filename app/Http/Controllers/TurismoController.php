<?php

namespace App\Http\Controllers;

use App\Models\Turismo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TurismoController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //-----------------------------
       $turismos = Turismo::all(); 
        return view("turismos.index", compact("turismos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function mapa()
    {

        $turismos = Turismo::all();
        return view('turismos.mapa', compact('turismos'));
        
    }


    public function create()
    {
        // Renderiza el formulario para crear cliente
        return view("turismos.nuevo");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->hasFile('imagen')) {
            $ruta_imagen = $request->file('imagen')->store('imagenes', 'public');
        } else {
            $ruta_imagen = 'sin imagen';
        }

        $turismo = [
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
            'imagen' => $ruta_imagen,
            'latitud' => $request->latitud,
            'longitud' => $request->longitud,
        ];

        Turismo::create($turismo);

        return redirect()->route('turismos.index');   
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $turismo = Turismo::findOrFail($id);
        return view('turismos.editar', compact('turismo'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $turismo = Turismo::findOrFail($id);
        // Opcional: eliminar imagen antigua si quieres
        if ($request->hasFile('imagen')) {

            if ($turismo->imagen && \Storage::disk('public')->exists($turismo->imagen)) {
                \Storage::disk('public')->delete($turismo->imagen);
            }
            $ruta_imagen = $request->file('imagen')->store('imagenes', 'public');
        } else {
            $ruta_imagen = $turismo->imagen;
        }

        $turismo->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
            'imagen' => $ruta_imagen,
            'latitud' => $request->latitud,
            'longitud' => $request->longitud,
        ]);

        return redirect()->route('turismos.index')->with('success', 'Turismo actualizado correctamente');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $turismo = Turismo::findOrFail($id);

        if ($turismo->imagen && $turismo->imagen !== 'sin imagen') {
            if (Storage::disk('public')->exists($turismo->imagen)) {
                Storage::disk('public')->delete($turismo->imagen);
            } else {
                logger("La imagen no existe en disco: " . $turismo->imagen);
            }
        }

        $turismo->delete();
        return redirect()->route('turismos.index')->with('success', 'turismo eliminado correctamente.');
    }


}