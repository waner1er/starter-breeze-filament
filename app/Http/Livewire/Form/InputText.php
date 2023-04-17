<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class InputText extends Component
{
    public $name;
    public $label;

    public function render()
    {
        return view('livewire.form.input-text');
    }
}
