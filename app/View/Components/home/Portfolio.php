<?php

namespace App\View\Components\home;

use Illuminate\View\Component;

class portfolio extends Component
{

    public array $items = [];
    public array $tabs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css','AlpineJS','HTML/CSS'],
                'tile' => 'Full stack app qui est mon portfolio réalisé grâce à Laravel, Tailwindcss et AlpineJS',
                'image' => url('/img/portfoliosite.png'),
                'github' => 'https://github.com/mourad-boussiouf/site-perso'
            ],
            [
                'category' => ['Javascript','HTML/CSS'],
                'tile' => 'Barre autocompletion sur le thème de Dragon ball, fetch JS depuis un JSON.',
                'image' => url('/img/autocompletionsite.png'),
                'github' => 'https://github.com/mourad-boussiouf/autocompletion'
            ],
            [
                'category' => ['PHP','HTML/CSS'],
                'tile' => 'Site de E-commerce réalisé uniquement en PHP native, architecture MVC à des fins de compréhension.',
                'image' => url('/img/ecommercesite.png'),
                'github' => 'https://github.com/mourad-boussiouf/boutique-en-ligne'
            ],
            [
                'category' => ['HTML/CSS'],
                'tile' => 'Site vitrine "Corée du sud" touristique fait uniquement en HTML/CSS',
                'image' => url('/img/coreedusudsite.png'),
                'github' => 'https://github.com/mourad-boussiouf/voyages'
            ],            [
                'category' => ['Javascript','HTML/CSS'],
                'tile' => 'Jeu de clicker/incrémentation "Michael Bay Simulator" en Javascript',
                'image' => url('/img/mbssite.png'),
                'github' => 'https://github.com/mourad-boussiouf/clicker'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
