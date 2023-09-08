<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class frontend_header extends Component
{
    public $headerClass;
    public $divClass;
    /**
     * Create a new component instance.
     */
    public function __construct($headerClass,$divClass)
    {
        $this-> headerClass = $headerClass;
        $this-> divClass = $divClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend_header');
    }
}
