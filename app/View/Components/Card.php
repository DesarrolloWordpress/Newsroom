<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{

    public $titulo;

    /**
     * Create a new component instance.
     * @param string $titulo
     * @return void
     */
    public function __construct(String $titulo = null)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
