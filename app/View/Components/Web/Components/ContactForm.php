<?php

namespace App\View\Components\Web\Components;

use Illuminate\View\Component;

class ContactForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $title, public string $type, public string $action)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.components.contact-form');
    }
}