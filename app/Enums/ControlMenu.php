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
    case BANKS;
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
            ControlMenu::HOME => ['Home', route('control.banners.index'), null],
            ControlMenu::BANNERS => ['Banners', route('control.banners.index'), [
                ['Gerenciar Banners', route('control.banners.index')],
                ['Novo Banner', route('control.banners.create')]
            ]],
            ControlMenu::MEDIAS => ['Mídias', route('control.medias.index'), null],
            ControlMenu::EVENTS => ['Eventos', route('control.events.index'), [
                ['Gerenciar Eventos', route('control.events.index')],
                ['Novo Evento', route('control.events.create')]
            ]],
            ControlMenu::PROJECTS => ['Projetos', route('control.projects.index'), [
                ['Gerenciar Projetos', route('control.projects.index')],
                ['Novo Projeto', route('control.projects.create')]
            ]],
            ControlMenu::TALKS => ['Palestras', route('control.talks.index'), [
                ['Gerenciar Palestras', route('control.talks.index')],
                ['Nova Palestra', route('control.talks.create')]
            ]],
            ControlMenu::BANKS => ['Bancos', route('control.banks.index'), [
                ['Gerenciar Bancos', route('control.banks.index')],
                ['Novo Banco', route('control.banks.create')]
            ]],
            ControlMenu::CONFIGURATIONS => ['Configurações', route('control.configs.index'), [
                ['Opções Gerais', route('control.configs.index')],
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