<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InputRadio extends Component
{
    public $lblradio;
    public function mount($lblradioEl){
        
        $this->lblradio=$lblradioEl;
    }
    public function render()
    {
        return view('livewire.input-radio');
    }
}
