<?php

namespace App\View\Components\Web\Components;

use Illuminate\View\Component;

class ScheduleCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $title
     * @param string $content
     * @param string $link
     * @param string $background
     *
     * @return void
     */
    public function __construct(public string $type, public string $title, public string $content, public string $link, public string $background)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.components.schedule-card');
    }
}