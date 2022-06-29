<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $alert;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?string $type = "danger", string $alert)
    {
        $this->type = $type;
        $this->title = $alert;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
