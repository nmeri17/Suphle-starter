<?php
	namespace AllModules\_module_name\Tests;

	use Suphle\Hydration\Container;

	use Suphle\Testing\TestTypes\ModuleLevelTest;

	use AllModules\_module_name\Meta\_module_nameDescriptor;

	class ConfirmInstall extends ModuleLevelTest {

		protected function getModules ():array {

			return [new _module_nameDescriptor(new Container)];
		}

		public function test_initial_path_is_accessible () {

			$this->get("/hello") // when

			// then
			->assertOk()->assertJson(["message" => "World"]);
		}
	}
?>