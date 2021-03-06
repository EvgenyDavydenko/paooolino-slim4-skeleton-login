<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

// set container and dependencies
$containerBuilder = new \DI\ContainerBuilder();

require __DIR__ . '/../app/dependencies.php';

$container = $containerBuilder->build();
Slim\Factory\AppFactory::setContainer($container);

// Instantiate the Slim App
$app = Slim\Factory\AppFactory::create();
//$app->setBasePath('/subdirectory');

// Add Error Handling Middleware
$app->addErrorMiddleware(true, false, false);

// App middleware
require __DIR__ . '/../app/middleware.php';

// App routes
require __DIR__ . '/../app/routes.php';

// routing middleware
$app->addRoutingMiddleware();

$app->run();