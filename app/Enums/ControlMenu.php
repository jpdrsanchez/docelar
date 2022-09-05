<?php

namespace App\Enums;

use App\Helpers\MenuItem;

enum ControlMenu
{
    case HOME;
    case MEDIAS;
    case BANNERS;
    case EVENTS;
    case PROJECTS;
    case TALKS;
    case CONFIGURATIONS;

    /**
     * Formats setValues function result
     *
     * @param array $value
     * @return MenuItem
     */
    private function formatValues(array $value): MenuItem
    {
        return new MenuItem($value[0], $value[1], $value[2]);
    }

    /**
     * Set current enum value
     *
     * @return array
     */
    private function setValues(): array
    {
        return match ($this) {
            ControlMenu::HOME => ['Home', route('control.'), null],
            ControlMenu::BANNERS => ['Banners', route('control.banners.index'), null],
            ControlMenu::MEDIAS => ['Mídias', route('control.medias.index'), null],
            ControlMenu::EVENTS => ['Eventos', route('control.'), [
                ['Gerenciar Eventos', route('control.')],
                ['Novo Evento', route('control.')]
            ]],
            ControlMenu::PROJECTS => ['Projetos', route('control.'), [
                ['Gerenciar Projetos', route('control.')],
                ['Novo Projeto', route('control.')]
            ]],
            ControlMenu::TALKS => ['Palestras', route('control.'), [
                ['Gerenciar Palestras', route('control.')],
                ['Nova Palestra', route('control.')]
            ]],
            ControlMenu::CONFIGURATIONS => ['Configurações', route('control.'), [
                ['SMPT', route('control.')],
                ['Opções Gerais', route('control.')],
            ]]
        };
    }

    /**
     * Returns the enum formated value
     *
     * @return MenuItem
     */
    public function getValues(): MenuItem
    {
        return $this->formatValues($this->setValues($this));
    }
}