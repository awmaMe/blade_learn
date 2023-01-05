<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class InputField extends Component
{
    public function __construct(public string $type, public string $name, public string $id)
    {
    }

    public function render(): \Illuminate\Contracts\View\View|\Closure|string
    {
        return view('components.form.input-field');
    }
}
