<?php

namespace App\View\Components\Session;

use Illuminate\View\Component;

class FlashMessage extends Component
{
    public function __construct(public ?string $message = null)
    {
        $this->message = session('flash_message');
    }

    public function render(): \Illuminate\Contracts\View\View|\Closure|string
    {
        return view('components.session.flash-message');
    }
}
