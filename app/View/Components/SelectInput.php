<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectInput extends Component
{
    public $a;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($a = '')
    {
        $this->a = $a;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('components.select-input');
    }
}
