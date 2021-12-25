<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Textbox extends Component
{
    public $nameEl;
    public $type;
    public function mount($nameEl , $type){
        $this->nameEl=$nameEl;
        $this->type=$type;

    }
    public function render()
    {
        return view('livewire.textbox');
    }
}
