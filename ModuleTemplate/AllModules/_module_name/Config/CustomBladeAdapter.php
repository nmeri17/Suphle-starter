<?php

namespace AllModules\_module_name\Config;

use Suphle\Adapters\Presentation\Blade\DefaultBladeAdapter;

use AllModules\_module_name\Markup\Components\AppLayouts;

class CustomBladeAdapter extends DefaultBladeAdapter
{
    public function bindComponentTags(): void
    {

        $this->bladeCompiler->component("layout", AppLayouts::class);
    }
}