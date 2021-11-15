<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButtonDate extends Component
{
    public $btn;
    public function mount($btn){
        $this->btn=$btn;

    }

    public function render()
    {
        return view('livewire.button-date');
    }
}
