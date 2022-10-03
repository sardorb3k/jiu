<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\System;

class Footer extends Component
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
        return view('components.footer', compact('system'));
    }
}
