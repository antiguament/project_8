<?php

namespace App\Livewire;

use Livewire\Component;

class DashboardContent extends Component
{
    public $message = "¡Bienvenido al Dashboard!";

   




    public $currentComponent = 'dashboard-content';

    public function loadComponent($component)
    {
        $this->currentComponent = $component;
    }
    
    public function render()
    {
        return view('livewire.dashboard-content');
    }


}



