<?php

namespace App\View\Components\Control\Components;

use App\Helpers\MenuItem;
use Illuminate\View\Component;

class NavItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public MenuItem $item)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.control.components.nav-item');
    }
}