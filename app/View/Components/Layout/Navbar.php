<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $items)
    {
        $this->navigationItems = [
            ['label' => 'Mon parcours', 'href' => '#monparcours'],
            ['label' => 'Mes projets', 'href' => '#mesprojets'],
            ['label' => 'Mon CV', 'href' => '#moncv'],
            ['label' => 'Contact', 'href' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar');
    }
}
