<?php
namespace App\Http\Controllers;

use App\Models\ExamenFinal;
use Illuminate\Http\Request;

class ExamenFinalController extends Controller
{
    public function index()
    {
        $alumnos = ExamenFinal::all();
        return view('registroalumnos.index', compact('alumnos'));
    }

    public function create()
    {
        return view('registroalumnos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'carnet' => 'required|integer',
            'nombre_alumno' => 'required|string|max:255',
            'correo_institucional' => 'required|string|email|max:255|unique:registroalumnos',
            'telefono' => 'required|integer',
        ]);

        ExamenFinal::create($request->all());

        return redirect()->route('registroalumnos.index')
            ->with('success', 'Alumno creado exitosamente.');
    }

    public function show(ExamenFinal $registroalumno)
    {
        return view('registroalumnos.show', compact('registroalumno'));
    }

    public function edit(ExamenFinal $registroalumno)
    {
        return view('registroalumnos.edit', compact('registroalumno'));
    }

    public function update(Request $request, ExamenFinal $registroalumno)
    {
        $request->validate([
            'carnet' => 'required|integer',
            'nombre_alumno' => 'required|string|max:255',
            'correo_institucional' => 'required|string|email|max:255|unique:registroalumnos,correo_institucional,' . $registroalumno->id,
            'telefono' => 'required|integer',
        ]);

        $registroalumno->update($request->all());

        return redirect()->route('registroalumnos.index')
            ->with('success', 'Alumno actualizado exitosamente.');
    }

    public function destroy(ExamenFinal $registroalumno)
    {
        $registroalumno->delete();

        return redirect()->route('registroalumnos.index')
            ->with('success', 'Alumno eliminado exitosamente.');
    }
}
