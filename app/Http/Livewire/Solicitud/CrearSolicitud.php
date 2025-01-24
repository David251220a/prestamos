<?php

namespace App\Http\Livewire\Solicitud;

use Livewire\Component;

class CrearSolicitud extends Component
{

    public $ver_datos, $documento, $nombre, $apellido, $email, $direccion, $celular;
    public $ver_prestamos;

    public function mount()
    {
        $this->ver_datos = 'block';
        $this->ver_prestamos = 'none';
    }

    public function render()
    {
        return view('livewire.solicitud.crear-solicitud');
    }

    public function detalle_prestamos_click()
    {
        $this->ver_datos = 'none';
        $this->ver_prestamos = 'block';
    }

    public function retro_ver_datos()
    {
        $this->ver_datos = 'block';
        $this->ver_prestamos = 'none';
    }

}
