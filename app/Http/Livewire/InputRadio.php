<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InputRadio extends Component
{
    public $lblradio;
    public $radioName;
    
    public function mount($lblradioEl, $radioName){
        
        $this->lblradio=$lblradioEl;
        $this->radioName=$radioName;
        
    }
    public function render()
    {
        return view('livewire.input-radio');
    }
}
