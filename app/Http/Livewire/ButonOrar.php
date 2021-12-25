<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ButonOrar extends Component
{
    public $btn;
    public $btn_id;
    public function mount($btn,$btn_id){
        $this->btn=$btn;
        $this->btn_id=$btn_id;

    }
    public function render()
    {
        return view('livewire.buton-orar');
    }
}
