<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class NavbarItem extends Component
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

            ['label'=>'Mon Cv', 'href'=>'#currvitae'],
            ['label'=>'Projets', 'href'=>'#portfolio'],
            ['label'=>'Mon linkedin', 'href'=>'#linkedin'],
            ['label'=>'Contact', 'href'=>'#contact']

        ];

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layout.navbar-item');
    }
}
