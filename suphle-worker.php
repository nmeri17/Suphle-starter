<?php
	use Suphle\Server\ModuleWorkerAccessor;

	use Spiral\RoadRunner\{Environment, Environment\Mode};

	use AllModules\PublishedModules;

	require_once "vendor/autoload.php";

	$publishedModules = new PublishedModules;

	$isHttpMode = Environment::fromGlobals()->getMode() === Mode::MODE_HTTP;

	(new ModuleWorkerAccessor($publishedModules, $isHttpMode))

	->safeSetupWorker();
?>