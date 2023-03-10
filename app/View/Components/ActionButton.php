<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActionButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $id;
    public function __construct($url, $id)
    {
        $this->url = $url;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.actionButton');
    }
}
