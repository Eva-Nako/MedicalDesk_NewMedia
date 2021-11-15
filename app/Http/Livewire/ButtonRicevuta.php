<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonRicevuta extends Component
{
    public $typeofbill;
    public $icons;
    public function mount($type,$icons){
        $this->typeofbill=$type;
        $this->icons=$icons;

    }
    public function render()
    {
        return view('livewire.button-ricevuta');
    }
}
