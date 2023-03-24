<?php
	namespace AllModules\_module_name\Tests;

	use Suphle\Hydration\Container;

	use Suphle\Testing\TestTypes\ModuleLevelTest;

	use AllModules\_module_name\Meta\_module_nameDescriptor;

	class ConfirmInstallTest extends ModuleLevelTest {

		protected function getModules ():array {

			return [new _module_nameDescriptor(new Container)];
		}

		public function test_initial_path_is_accessible () {

			$prefix = strtolower("_module_name");

			$this->get("/$prefix/hello") // when

			// then
			->assertOk()->assertJson(["message" => "World"]);
		}
	}
?>