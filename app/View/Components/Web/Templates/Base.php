<?php

namespace App\View\Components\Web\Templates;

use Illuminate\View\Component;

class Base extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $title
     * @return void
     */
    public function __construct(public string $title)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.templates.base');
    }
}