<?php

namespace Regnilk\BsFormLaravel\Components;

use Illuminate\View\Component;

class Elem extends Component
{
    public $name;
    public $width;
    public $icon;
    public $label;
    public $labelWidth;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $width=12, $icon='', $labelWidth='150')
    {
        $this->name = trim($name);
        $this->width = $width;
        $this->icon = trim($icon);
        $this->label = trim($label);
        $this->labelWidth = $labelWidth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('bs-form-laravel::elem');
    }
}
