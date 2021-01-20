<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class Card extends Component
{
    public $id;
    public $name;
    public $brand;
    public $description;
    public $image;
    public $price;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $name, $brand, $description, $image, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->description = $description;
        $this->image = $image;
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
