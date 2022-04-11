<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NButton extends Component
{

    /** 
     * 
     * variante del botón 
     * 
     * @var string $variant 
     * 
     * */
    public $variant = 'primary';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($variant)
    {
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.n-button');
    }
}
