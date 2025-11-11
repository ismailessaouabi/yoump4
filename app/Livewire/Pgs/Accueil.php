<?php

namespace App\Livewire\Pgs;

use Livewire\Component;

class Accueil extends Component
{
    public function render()
    {
        return view('livewire.pgs.accueil')->layout('livewire.pgs.layout');
    }
}
