<?php
	use Suphle\Server\ModuleWorkerAccessor;

	use Suphle\Flows\OuterFlowWrapper;

	use AllModules\PublishedModules;

	require_once "vendor/autoload.php";

	/**
	 * This is for use when handling traditional requests i.e. without RR
	*/
	$handlerIdentifier = new PublishedModules;

	$accessor = (new ModuleWorkerAccessor($handlerIdentifier, false))

	->buildIdentifier();

	$handlerIdentifier->firstContainer()->getClass(OuterFlowWrapper::class);

	$accessor->getQueueWorker()->processTasks();
?>