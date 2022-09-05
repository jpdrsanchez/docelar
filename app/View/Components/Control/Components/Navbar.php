<?php

namespace App\View\Components\Control\Components;

use App\Enums\ControlMenu;
use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Control Menu Enum Array
     *
     * @var ControlMenu[]
     */
    public array $menu;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menu = ControlMenu::cases();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.control.components.navbar');
    }
}