<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkbox extends Component
{
    public $checkboxlbl;
    public $namecheckbox;

    public function mount($lblcheck,$namecheckbox)
    {
        $this->checkboxlbl=$lblcheck;
        $this->namecheckbox=$namecheckbox;
    }

    public function render()
    {
        return view('livewire.checkbox');
    }
}
