<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Login extends Component
{
    public $idBtn;
    public $idMessage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($idBtn, $idMessage)
    {
        $this->idBtn = $idBtn;
        $this->idMessage = $idMessage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.login');
    }
}
