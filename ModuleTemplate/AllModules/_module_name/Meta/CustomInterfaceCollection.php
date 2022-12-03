<?php
	namespace AllModules\_module_name\Meta;

	use Suphle\Hydration\Structures\BaseInterfaceCollection;

	use Suphle\Contracts\Config\Router;

	use AllModules\_module_name\Config\RouterMock;

	use ModuleInteractions\_module_name;

	class CustomInterfaceCollection extends BaseInterfaceCollection {

		public function getConfigs ():array {
			
			return array_merge(parent::getConfigs(), [

				Router::class => RouterMock::class
			]);
		}

		public function simpleBinds ():array {

			return array_merge(parent::simpleBinds(), [

				_module_name::class => ModuleApi::class
			]);
		}
	}
?>