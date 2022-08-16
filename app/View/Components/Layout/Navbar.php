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
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'Qui-suis-je', 'href' => '#Quisuisje'],
            ['label' => 'Portfolio', 'href' => '#portfolio'],
            ['label' => 'CV', 'href' => 'https://drive.google.com/uc?export=download&id=1O0LlNgzgfesT51uHNYDgthg_0lT4M9EG'],
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
