<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $routeImage;
    public $name;
    public $marca;
    public $price;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $routeImage, $marca, $price)
    {
        $this->name = $name;
        $this->routeImage = $routeImage;
        $this->marca = $marca;
        $this->price = $price;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
