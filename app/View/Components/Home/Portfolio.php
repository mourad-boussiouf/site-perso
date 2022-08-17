<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{

    public array $items = [];
    public array $tabs = [];


    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'TailwindCSS','AlpineJS','HTML/CSS'],
                'title' => 'Site personnel/portfolio réalisé grâce à Laravel, TailwindCSS et AlpineJS.',
                'image' => url('/img/portfoliosite.png'),
                'github' => 'https://github.com/mourad-boussiouf/site-perso'
            ],
            [
                'category' => ['Javascript','HTML/CSS'],
                'title' => 'Barre autocompletion sur le thème de Dragon ball, fetch JS depuis un JSON.',
                'image' => url('/img/autocompletionsite.png'),
                'github' => 'https://github.com/mourad-boussiouf/autocompletion'
            ],
            [
                'category' => ['PHP','HTML/CSS'],
                'title' => 'Site de E-commerce réalisé uniquement en PHP native, architecture MVC à des fins de compréhension.',
                'image' => url('/img/ecommercesite.png'),
                'github' => 'https://github.com/mourad-boussiouf/boutique-en-ligne'
            ],
            [
                'category' => ['HTML/CSS'],
                'title' => 'Site vitrine "Corée du sud" touristique fait uniquement en HTML/CSS.',
                'image' => url('/img/coreedusudsite.png'),
                'github' => 'https://github.com/mourad-boussiouf/voyages'
            ],
            [
                'category' => ['Javascript','HTML/CSS'],
                'title' => 'Jeu de clicker/incrémentation "Michael Bay Simulator" Javascript Vanilla only.',
                'image' => url('/img/mbssite.png'),
                'github' => 'https://github.com/mourad-boussiouf/clicker'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
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
