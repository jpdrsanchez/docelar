<?php

namespace App\View\Components\Control\Components;

use App\Models\Media;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class ImagesModal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public Collection $medias, public ?string $id = null, public bool $hasInput = true)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.control.components.images-modal');
    }
}