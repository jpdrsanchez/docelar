<?php

namespace App\View\Components\Control\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * @var array
     */
    public const MENU = [
        [
            'name' => 'Início',
            'link' => '/',
            'hasDropdown' => false,
            'dropdownItems' => []
        ],
        [
            'name' => 'Eventos',
            'link' => '#',
            'hasDropdown' => true,
            'dropdownItems' => [
                [
                    'name' => 'Gerenciar Eventos',
                    'link' => '/eventos',
                ],
                [
                    'name' => 'Novo Evento',
                    'link' => '/eventos/criar',
                ]
            ]
        ],
        [
            'name' => 'Projetos',
            'link' => '#',
            'hasDropdown' => true,
            'dropdownItems' => [
                [
                    'name' => 'Gerenciar Projetos',
                    'link' => '/projeto',
                ],
                [
                    'name' => 'Novo Projeto',
                    'link' => '/projeto/criar',
                ]
            ]
        ],
    ];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the component menu data
     *
     * @return array
     */
    public function menu()
    {
        return self::MENU;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.control.components.navbar');
    }
}