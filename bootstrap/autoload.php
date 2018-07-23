<?php

require_once __DIR__ .'/../vendor/autoload.php';

$route = new FrameworkAULA\Routing\Route();

require_once __DIR__ . '/../app/routes.php';

$route->dispatch();