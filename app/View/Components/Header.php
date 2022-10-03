<?php

namespace App\View\Components;

use Illuminate\View\Component;
// Model
use App\Models\System;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $system = System::first();
        return view('components.header', compact('system'));
    }
}
