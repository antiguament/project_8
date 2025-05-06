<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MiComponente1 extends Component
{
    public $nombre;
    public $contador;
    public $esActivo;

    /**
     * Create a new component instance.
     *
     * @param  string  $nombre
     * @param  int  $contador
     * @param  bool  $esActivo
     * @return void
     */
    public function __construct($nombre = 'Invitado', $contador = 0, $esActivo = false)
    {
        $this->nombre = $nombre;
        $this->contador = $contador;
        $this->esActivo = $esActivo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mi-componente1');
    }
}