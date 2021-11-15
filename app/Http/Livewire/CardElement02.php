<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardElement02 extends Component
{
   public $teksti;
   public $cmimi;
   public function mount($txt, $price){
       $this->teksti=$txt;
       $this->cmimi=$price;
   }

    public function render()
    {
        return view('livewire.card-element02');
    }
}
