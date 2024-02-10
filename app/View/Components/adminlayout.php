<?php

namespace App\View\Components;

use Illuminate\View\Component;

class adminLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     * @return \illuminate\views\View
     */
    public function render() 
    {
        return view('layouts.admin');
    }
}
