<?php

namespace App\Http\Livewire\Solicitud;

use App\Models\Persona;
use App\Models\Referente;
use Livewire\Component;

class PersonaReferente extends Component
{
    public $cedula_1, $nombre_1, $apellido_1, $celular_1, $direccion_1, $referente_1
    , $cedula_2, $nombre_2, $apellido_2, $celular_2, $direccion_2, $referente_2, $persona;
    public $continua = 0;

    protected $listeners = ['render'];

    protected $rules = [
        'cedula_1' => 'required',
        'nombre_1' => 'required',
        'apellido_1' => 'required',
        'direccion_1' => 'required',
        'cedula_2' => 'required',
        'nombre_2' => 'required',
        'apellido_2' => 'required',
        'direccion_2' => 'required',
    ];

    public function mount(Persona $persona)
    {
        if(count($persona->referente) > 0 ){
            $this->cedula_1 = number_format($persona->referente[0]->cedula, 0, ".", ".");
            $this->nombre_1 = $persona->referente[0]->nombre;
            $this->apellido_1 = $persona->referente[0]->apellido;
            $this->celular_1 = $persona->referente[0]->celular;
            $this->direccion_1 = $persona->referente[0]->direccion;
            $this->referente_1 = $persona->referente[0]->id;

            $this->cedula_2 = number_format($persona->referente[1]->cedula, 0, ".", ".");
            $this->nombre_2 = $persona->referente[1]->nombre;
            $this->apellido_2 = $persona->referente[1]->apellido;
            $this->celular_2 = $persona->referente[1]->celular;
            $this->direccion_2 = $persona->referente[1]->direccion;
            $this->referente_2 = $persona->referente[1]->id;
            $this->persona = $persona;
        }

    }

    public function render()
    {
        return view('livewire.solicitud.persona-referente');
    }

    public function save()
    {
        $this->emitTo('solicitud.persona-referente', 'reloadClassCSs');
        $this->validate();
        $documento_1 = str_replace('.', '', $this->cedula_1);
        $documento_2 = str_replace('.', '', $this->cedula_2);
        if($this->referente_1 > 0 ){
            $referente_p = Referente::find($this->referente_1);
            $referente_p->update([
                'nombre' => $this->nombre_1,
                'apellido' => $this->apellido_1,
                'cedula' => $documento_1,
                'celular' => $this->celular_1,
                'direccion' => $this->direccion_1,
                'usuario_modificacion' => auth()->user()->id,
            ]);

            $referente_s = Referente::find($this->referente_2);
            $referente_s->update([
                'nombre' => $this->nombre_2,
                'apellido' => $this->apellido_2,
                'cedula' => $documento_2,
                'celular' => $this->celular_2,
                'direccion' => $this->direccion_2,
                'usuario_modificacion' => auth()->user()->id,
            ]);

        }else{

            Referente::create([
                'persona_id' => $this->persona->id,
                'nombre' => $this->nombre_1,
                'apellido' => $this->apellido_1,
                'cedula' => $documento_1,
                'celular' => $this->celular_1,
                'direccion' => $this->direccion_1,
                'estado_ID' => 1,
                'usuario_alta' => auth()->user()->id,
                'usuario_modificacion' => auth()->user()->id,
            ]);

            Referente::create([
                'persona_id' => $this->persona->id,
                'nombre' => $this->nombre_2,
                'apellido' => $this->apellido_2,
                'cedula' => $documento_2,
                'celular' => $this->celular_2,
                'direccion' => $this->direccion_2,
                'estado_ID' => 1,
                'usuario_alta' => auth()->user()->id,
                'usuario_modificacion' => auth()->user()->id,
            ]);
        }

        $this->continua = 1;
        $this->emit('referente-up');

    }
}
