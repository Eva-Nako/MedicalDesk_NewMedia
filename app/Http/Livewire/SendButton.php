<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SendButton extends Component
{
    public $buton;
    public function mount($button){
        $this->buton=$button;

    }

    public function render()
    {
        return view('livewire.send-button');
    }
}
