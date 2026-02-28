<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function index()
    {
        $comidas = Comida::all();
        return view('comidas.index', compact('comidas'));
    }

    public function create()
    {
        return view('comidas.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'nombre_comida' => 'required|max:100',
        'costo'         => 'required|numeric',
        'categoria'     => 'required|in:bebidas,postres,platillos fuertes,entradas,sopas', 
    ]);

    Comida::create($request->all());
    return redirect()->route('comidas.index')->with('success', '¡Guardado!');
}

    public function edit($id)
    {
        // Buscamos por la llave primaria personalizada
        $comida = Comida::findOrFail($id); 
        return view('comidas.edit', compact('comida'));
    }

    public function update(Request $request, $id)
    {
        $comida = Comida::findOrFail($id);
        
        $comida->update([
            'nombre_comida'  => $request->nombre_comida,
            'costo'          => $request->costo,
            'detalle_comida' => $request->detalle_comida,
            'categoria'      => $request->categoria,
        ]);

        return redirect()->route('comidas.index')->with('success', '¡Comida actualizada con éxito!');
    }

    public function destroy($id)
    {
        $comida = Comida::findOrFail($id);
        $comida->delete();
        return redirect()->route('comidas.index')->with('success', 'Comida eliminada.');
    }
}