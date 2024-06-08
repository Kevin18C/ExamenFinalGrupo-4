<?php

namespace App\Http\Controllers;

use App\Models\ExamenFinal;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $alumnos = ExamenFinal::all();
        
        return view('welcome', compact('alumnos'));
    }
}
