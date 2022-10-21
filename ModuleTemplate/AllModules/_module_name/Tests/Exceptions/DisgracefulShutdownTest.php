<?php
	namespace AllModules\_module_name\Tests\Exceptions;

	use Suphle\Contracts\{Modules\DescriptorInterface, Config\ExceptionInterceptor};

	use Suphle\Hydration\Container;

	use Suphle\Testing\{TestTypes\InvestigateSystemCrash, Condiments\FilesystemCleaner};

	use AllModules\_module_name\Meta\_module_nameDescriptor;

	use Exception;

	class DisgracefulShutdownTest extends InvestigateSystemCrash {

		use FilesystemCleaner;

		private $exceptionConfig;

		public function getModule ():DescriptorInterface {

			return new _module_nameDescriptor(new Container);
		}

		protected function stubExceptionBridge (array $stubMethods = [], array $mockMethods = []):void {

			$parameters = $this->getContainer()->getMethodParameters(

				Container::CLASS_CONSTRUCTOR, self::BRIDGE_NAME
			);

			$this->exceptionConfig = $parameters["config"] = $this->stubExceptionConfig();

			$defaultStubs = [

				"writeStatusCode" => null
			];

			$this->massProvide([

				self::BRIDGE_NAME => $this->replaceConstructorArguments(

					self::BRIDGE_NAME, $parameters,

					array_merge($defaultStubs, $stubMethods), // overridding the method since parent can only make provision for merge and not unset (of disgracefulShutdown stub)

					$mockMethods
				)
			]);
		}

		protected function stubExceptionConfig ():ExceptionInterceptor {

			return $this->positiveDouble(ExceptionInterceptor::class, [

				"shutdownLog" => "error-log.txt",

				"shutdownText" => "Bye World"
			]);
		}

		public function test_disgraceful_shutdown_successful () {

			// given
			$logPath = $this->exceptionConfig->shutdownLog();

			$this->assertEmptyDirectory($logPath);

			$exception = new Exception;

			$exceptionDetails = json_encode($exception);

			// when
			$response = $this->getContainer()->getClass(self::BRIDGE_NAME)

			->disgracefulShutdown($exceptionDetails, $exception);

			// then
			$this->assertFileExists($logPath);

			$this->assertStringContainsStringIgnoringCase($exceptionDetails);

			$this->assertNotEmptyDirectory($logPath, true);

			$this->assertSame(

				$response, $this->exceptionConfig->shutdownText()
			);
		}
	}
?>