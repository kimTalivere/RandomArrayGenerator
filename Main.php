<?php

// Load the Composer autoloader to automatically include necessary classes
require __DIR__ . '/vendor/autoload.php';

// Load the service container configuration from the services.php file
$container = require __DIR__ . '/services.php';

// Retrieve the Application instance from the container
$app = $container->get(App\Application::class);

// Execute the run method of the Application instance
$app->run();
