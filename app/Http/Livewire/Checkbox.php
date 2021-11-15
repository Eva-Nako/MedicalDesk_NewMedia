<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkbox extends Component
{
    public $checkboxlbl;

    public function mount($lblcheck)
    {
        $this->checkboxlbl=$lblcheck;
    }

    public function render()
    {
        return view('livewire.checkbox');
    }
}
