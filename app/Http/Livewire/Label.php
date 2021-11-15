<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Label extends Component
{
   public $lbl;
   public function mount($h1Element){
       $this->lbl=$h1Element ;
   }



    public function render()
    {
        return view('livewire.label');
    }
}
