<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalDelete extends Component
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
    public $class;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $route, $class)
    {
        $this->title = $title;
        $this->route = $route;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.modal.delete');
    }
}
