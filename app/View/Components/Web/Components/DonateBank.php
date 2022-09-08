<?php

namespace App\View\Components\Web\Components;

use Illuminate\View\Component;

class DonateBank extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public bool|string $image, public string $agency, public string $account, public string $bank, public string $name, public string $document)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.components.donate-bank');
    }
}