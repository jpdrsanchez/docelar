<?php

namespace App\View\Components\Web\Templates;

use Illuminate\View\Component;

class Schedule extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $background, public string $category, public string $title, public string $date, public string $description, public string $link, public string $sectionTitle = '')
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.templates.schedule');
    }
}