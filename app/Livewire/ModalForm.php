<?php

namespace App\Livewire;

use Livewire\Component;

class ModalForm extends Component
{
    public $isOpen = false;
    public function render()
    {
        return view('livewire.modal-form');
    }
}
