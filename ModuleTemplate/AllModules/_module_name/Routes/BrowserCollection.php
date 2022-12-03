<?php
	namespace AllModules\_module_name\Routes;

	use Suphle\Routing\BaseCollection;

	use Suphle\Response\Format\Json;

	use AllModules\_module_name\Coordinators\BaseCoordinator;

	class BrowserCollection extends BaseCollection {

		public function _handlingClass ():string {

			return BaseCoordinator::class;
		}

		public function HELLO () {

			$this->_get(new Json("handleHello"));
		}
	}
?>