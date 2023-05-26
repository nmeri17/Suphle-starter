<?php

namespace AllModules\_module_name\Markup\Components;

use Illuminate\View\Component;

class AppLayouts extends Component
{
    public function __construct($pageTitle, $scripts)
    {

        //
    }

    public function render()
    {

        return view("layouts.app");
    }
}
