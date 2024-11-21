<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     */
    public $action;
    public $method;
    public $typeForm;
    public function __construct($typeForm, $action, $method)
    {
        $this->typeForm = $typeForm;
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form', [
            'action' => $this->action,
            'method' => $this->method,
            'typeForm' => $this->typeForm,
        ]);
    }
}
