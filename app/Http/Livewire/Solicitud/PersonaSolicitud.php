<?php

namespace App\Http\Livewire\Solicitud;

use App\Models\ParametroGeneral;
use App\Models\Persona;
use App\Models\TipoPrestamo;
use Livewire\Component;

class PersonaSolicitud extends Component
{
    public $persona, $tasa, $monto_solicitado, $plazo, $tipo_prestamo_1, $solicitud_id;

    public $continua = 0;

    protected $listeners = ['render'];

    protected $rules = [
        'monto_solicitado' => 'required',
        'plazo' => 'required',
        'tasa' => 'required',
    ];

    public function mount(Persona $persona)
    {
        $this->persona = $persona;
        $paramentro_general = ParametroGeneral::where('id', 1)->first();
        $this->tasa = $paramentro_general->tasa;
    }

    public function render()
    {
        $tipo_prestamo = TipoPrestamo::where('estado_id', 1)->get();
        return view('livewire.solicitud.persona-solicitud', compact('tipo_prestamo'));
    }

    public function save()
    {

    }
}
