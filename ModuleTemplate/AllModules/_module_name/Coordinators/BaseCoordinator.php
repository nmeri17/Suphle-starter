<?php
	namespace AllModules\_module_name\Coordinators;

	use Suphle\Services\ServiceCoordinator;

	class BaseCoordinator extends ServiceCoordinator {

		public function handleHello ():array {

			return ["message" => "World"];
		}
	}
?>