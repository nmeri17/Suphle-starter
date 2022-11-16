<?php
	namespace AllModules\_module_name\Tests\Exceptions;

	use Suphle\Contracts\Modules\DescriptorInterface;

	use Suphle\Hydration\Container;

	use Suphle\Exception\Diffusers\GenericDiffuser;

	use Suphle\Testing\TestTypes\InvestigateSystemCrash;

	use AllModules\_module_name\Meta\_module_nameDescriptor;

	use Exception;

	class GracefulShutdownTest extends InvestigateSystemCrash {

		public function getModule ():DescriptorInterface {

			return new _module_nameDescriptor(new Container);
		}

		public function test_graceful_shutdown_successful () {

			$exceptionDetails = \Wyrihaximus\throwable_json_encode(new Exception); // given

			$renderer = $this->getContainer()->getClass(self::BRIDGE_NAME)

			->gracefulShutdown($exceptionDetails); // when

			$this->assertTrue(

				$renderer->matchesHandler(GenericDiffuser::CONTROLLER_ACTION)
			); // then
		}
	}
?>