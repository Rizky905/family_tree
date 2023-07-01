<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Text extends Component
{
    /**
     * Create a new component instance.
     */
    public $label;
    public $id;
    public $type;
    public $name;
    public $value;
    public $isRequired;
    public $placeholder;
    public $column;




    public function __construct(
        $label = "",
        $id = "",
        $type = "text",
        $name = "",
        $value = "",
        $column = "9",
        $isRequired = false,
        $placeholder = "",
    ) {
        //
        $this->label = $label;
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->isRequired = $isRequired;
        $this->placeholder = $placeholder;
        $this->column = $column;


        // dd($isRequired);
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.text');
    }
}
