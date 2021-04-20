<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonEdit extends Component
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $route;

    /**
     * @var string
     */
    public $target;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $route, $target)
    {
        $this->title = $title;
        $this->route = $route;
        $this->target = $target;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.button.edit');
    }
}
