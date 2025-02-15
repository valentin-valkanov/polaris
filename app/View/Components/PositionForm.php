<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PositionForm extends Component
{
    public string $action;
    public string $buttonText;

    public function __construct(string $action = '/default-route', string $buttonText = 'Submit')
    {
        $this->action = $action;
        $this->buttonText = $buttonText;
    }

    public function render()
    {
        return view('components.position-form');
    }
}
