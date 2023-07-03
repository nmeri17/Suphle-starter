<?php

namespace AllModules\_module_name\Markup\Components;

use Illuminate\View\Component;

class AppLayouts extends Component
{
    public function __construct(
    
        public string $pageTitle = "Suphle", public string $scripts = ""
    )
    {

        //
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render()
    {

        return view("layouts.app");
    }
}
