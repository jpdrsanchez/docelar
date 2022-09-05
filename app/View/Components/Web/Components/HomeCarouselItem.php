<?php

namespace App\View\Components\Web\Components;

use App\Enums\BannerTypes;
use Illuminate\View\Component;

class HomeCarouselItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $title, public string $text, public string $image, public string $link, public string $buttonText, public BannerTypes $type)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.components.home-carousel-item');
    }
}