<?php
	namespace AllModules\_module_name\Routes;

	use Suphle\Routing\BaseCollection;

	use Suphle\Response\Format\Json;

	use AllModules\_module_name\Controllers\BaseCoordinator;

	class BrowserCollection extends BaseCollection {

		public function _handlingClass ():string {

			return BaseCoordinator::class;
		}

		public function _index () {

			$this->_get(new Json("handleIndex"));
		}
	}
?>