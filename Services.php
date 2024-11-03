<?php

// Import necessary classes
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

// Create a new service container instance
$container = new ContainerBuilder();

// Load services from the YAML file
$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/config'));
$loader->load('services.yaml');

// Compile the container to optimize the configuration
$container->compile();

// Return the container instance for use in the application
return $container;
