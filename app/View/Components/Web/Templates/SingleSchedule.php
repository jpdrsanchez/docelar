<?php

namespace App\View\Components\Web\Templates;

use Illuminate\View\Component;

class SingleSchedule extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $previousRoute, public string $previousTitle, public string $pageTitle)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.templates.single-schedule');
    }
}