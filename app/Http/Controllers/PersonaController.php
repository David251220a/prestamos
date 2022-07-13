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

    public function store(Request $request)
    {
        $request->validate([
            'documento' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
        ]);

        $documento = str_replace('.', '', $request->documento);
        $nombre = $request->nombre;
        $apellido = $request->apellido;
        $fecha_nacimiento = $request->fecha_nacimiento;
        $direccion = $request->direccion;
        $celular = $request->celular;
        $linea_baja = $request->linea_baja;
        $email = $request->email;

        Persona::create([
            'documento' => $documento,
            'nombre' => $nombre,
            'apellido' => $apellido,
            'fecha_nacimiento' => $fecha_nacimiento,
            'email' => $email,
            'foto' => '',
            'direccion' => $direccion,
            'linea_baja' => $linea_baja,
            'celular' => $celular,
            'ciudad_id' => $request->ciudad,
            'estado_id' => 1,
            'nacionalidad_id' => $request->nacionalidad,
            'usuario_alta' => auth()->user()->id,
            'usuario_modificacion' => auth()->user()->id,
        ]);

        return redirect()->route('persona.index')->with('message', 'Se ha creado con exito la persona!.');
    }
}
