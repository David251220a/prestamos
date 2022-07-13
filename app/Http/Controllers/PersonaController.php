<?php

namespace App\Http\Controllers;

use App\Models\Nacionalidad;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::where('estado_id', 1)->get();
        return view('persona.index', compact('personas'));
    }

    public function create()
    {
        $nacionalidad = Nacionalidad::where('estado_id', 1)->get();
        return view('persona.create', compact('nacionalidad'));
    }
}
