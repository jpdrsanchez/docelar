<?php

namespace App\Helpers;

use Illuminate\Support\Collection;

class MenuItem
{
    public Collection|null $dropdown;

    public function __construct(public readonly string $name,  public readonly string $url, array|null $dropdown = null)
    {
        $this->dropdown = empty($dropdown) ? null : $this->createSubItems($dropdown);
    }

    private function createSubItems(array $dropdown)
    {
        return collect($dropdown)->map(fn ($item) => new MenuItem($item[0], $item[1]));
    }
}