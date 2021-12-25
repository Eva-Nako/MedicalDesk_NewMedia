<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardElement02 extends Component
{
   public $teksti;
   public $cmimi;
   public $selectId;
   public $divId;
   public function mount($txt, $price, $selectId, $divId){
       $this->teksti=$txt;
       $this->cmimi=$price;
       $this->selectId=$selectId;
       $this->divId=$divId;

   }

    public function render()
    {
        return view('livewire.card-element02');
    }
}
