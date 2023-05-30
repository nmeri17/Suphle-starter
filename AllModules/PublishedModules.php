<?php

namespace AllModules;

use Suphle\Modules\ModuleHandlerIdentifier;

use Suphle\Hydration\Container;

use Suphle\Contracts\Modules\DescriptorInterface;

class PublishedModules extends ModuleHandlerIdentifier
{
    /**
     * @return DescriptorInterface[]
     *
     * @psalm-return list{DescriptorInterface}
     */
    public function getModules(): array
    {

        return [];
    }
}
