<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminHeader extends Component
{
    public $links = [];
    public $title = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($links, $title)
    {
        $this->links = $links;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-header');
    }
}
