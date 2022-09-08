<?php

namespace App\View\Components\Control\Templates;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Base extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $title
     * @return void
     */
    public function __construct(public string $title, public string $description)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(): View
    {
        return view('components.control.templates.base');
    }
}