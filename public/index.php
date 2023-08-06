<?php

declare(strict_types=1);

use App\Handler\PhpErrorHandler;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

(function (ContainerInterface $container): void {
    set_error_handler(new PhpErrorHandler(), E_ALL);
    /** @var Slim\App $app */
    $app = $container->get('App');
    $router = $app->getRouteCollector();

    $routeDispatcher = require 'config/route.php';
    $routeDispatcher($app);

    $middlewareDispatcher = require 'config/middleware.php';
    $middlewareDispatcher($app, $router);

    /** @var ServerRequestInterface $request */
    $request = $container->get(ServerRequestInterface::class);

    $app->run($request);
})(require 'config/container.php');
