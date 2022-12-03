<?php
	use Suphle\Server\ModuleWorkerAccessor;

	use AllModules\PublishedModules;

	require_once "../vendor/autoload.php";

	echo (new ModuleWorkerAccessor(new PublishedModules, true))

	->buildIdentifier()->getRequestRenderer($_GET["suphle_path"], true)

	->render();
?>