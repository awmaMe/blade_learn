<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class SubmitButton extends Component
{
    public function __construct(public string $label)
    {
    }

    public function render(): \Illuminate\Contracts\View\View|\Closure|string
    {
        return view('components.form.submit-button');
    }
}
