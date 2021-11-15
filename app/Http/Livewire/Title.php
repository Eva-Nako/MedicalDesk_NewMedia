<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Title extends Component
{
    
    public $comments
       // "01. Prenota ora i tamponi in Drive-in"
        //  'element02'=>'02. Prenota ora i tamponi in Drive-in',
        //  'element03'=>'03. Scegli fra le date e orari disponibili',
        //  'element04'=>'04. Dati anagrafici',
        //  'element05'=>'05. Tipo di ricevuta',
        //  'elementi06'=>'06. Metodo di pagamento'
        
    ;

    public function mount($comments){
       $this->comments=$comments;
    }

    public function render()
    {
        return view('livewire.title');
    }
}
