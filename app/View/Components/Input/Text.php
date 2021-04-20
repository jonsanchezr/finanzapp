<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class Text extends Component
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $class;

    /**
     * @var string
     */
    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $class, $required)
    {
        $this->name = $name;
        $this->class = $class;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.forms.input.text');
    }
}
