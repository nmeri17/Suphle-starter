<?php

namespace AllModules\_module_name\Tests\Exceptions;

use Suphle\Hydration\Container;

use Suphle\Contracts\Modules\DescriptorInterface;

use Suphle\Testing\{TestTypes\InvestigateSystemCrash, Utilities\PingHttpServer};

use AllModules\_module_name\Meta\_module_nameDescriptor;

class ServerBuildTest extends InvestigateSystemCrash
{
    use PingHttpServer;

    protected function getModule(): DescriptorInterface
    {

        return new _module_nameDescriptor(new Container());
    }

    public function test_server_builds_successfully()
    {

        $this->assertServerBuilds();
    }
}
