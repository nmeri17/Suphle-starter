<?php
	use Suphle\Modules\ModuleWorkerAccessor;

	use AllModules\PublishedModules;

	require_once "../vendor/autoload.php";

	echo (new ModuleWorkerAccessor(new PublishedModules))

	->buildIdentifier()->getRequestRenderer($_GET["tilwa_path"], true)

	->render();
?>