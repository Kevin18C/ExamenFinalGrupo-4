<?php
namespace App\Http\Controllers;

use App\Models\ExamenFinal;
use Illuminate\Http\Request;

class ExamenFinalController extends Controller
{


    public function create()
    {
        return view('registroalumnos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Carnet' => 'required|integer',
            'Nombre_alumno' => 'required|string|max:255',
            'Correo_Institucional' => 'required|string|email|max:255|unique:registroalumnos',
            'Telefono' => 'required|integer',
        ]);

        $alumno = new ExamenFinal();
        $alumno->Carnet = $request->Carnet;
        $alumno->Nombre_alumno = $request->Nombre_alumno;
        $alumno->Correo_Institucional = $request->Correo_Institucional;
        $alumno->Telefono = $request->Telefono;

        if ($alumno->save()) {
            return redirect()->route('welcome')
                ->with('success', 'Alumno creado exitosamente.');
        } else {
            return back()->withInput()
                ->with('error', 'Error al crear el alumno.');
        }
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
        'Carnet' => 'required|integer',
        'Nombre_alumno' => 'required|string|max:255',
        'Correo_Institucional' => 'required|string|email|max:255|unique:registroalumnos,correo_institucional,' . $registroalumno->id,
        'Telefono' => 'required|integer',
    ]);

    $registroalumno->Carnet = $request->Carnet;
    $registroalumno->Nombre_alumno = $request->Nombre_alumno;
    $registroalumno->Correo_Institucional = $request->Correo_Institucional;
    $registroalumno->Telefono = $request->Telefono;

    if ($registroalumno->save()) {
        return redirect()->route('welcome')
            ->with('success', 'Alumno actualizado exitosamente.');
    } else {
        return back()->with('error', 'Error al actualizar el alumno.');
    }
}


    public function destroy(ExamenFinal $registroalumno)
    {
        $registroalumno->delete();

        return redirect()->route('welcome')
            ->with('success', 'Alumno eliminado exitosamente.');
    }
}
