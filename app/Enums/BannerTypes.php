<?php

namespace App\Enums;

enum BannerTypes: string
{
    case PURPLE = 'purple';
    case DARK_BLUE = 'dark_blue';
    case LIGHT_BLUE = 'light_blue';

    public function placeholder(): string
    {
        return match ($this) {
            BannerTypes::PURPLE => 'Roxo',
            BannerTypes::DARK_BLUE => 'Azul Escuro',
            BannerTypes::LIGHT_BLUE => 'Azul Claro',
        };
    }

    public function background(): string
    {
        return match ($this) {
            BannerTypes::PURPLE => 'slide-purple.jpg',
            BannerTypes::DARK_BLUE => 'slide-blue.jpg',
            BannerTypes::LIGHT_BLUE => 'slide-light-blue.jpg',
        };
    }

    public function colors(): array
    {
        return match ($this) {
            BannerTypes::PURPLE => ['#fff', '#a1bee5'],
            BannerTypes::DARK_BLUE => ['#fff', '#a1bee5'],
            BannerTypes::LIGHT_BLUE => ['#000', '#c3b4d8'],
        };
    }
}