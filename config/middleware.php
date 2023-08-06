<?php

declare(strict_types=1);

use Psr\Container\ContainerInterface;
use Slim\App;
use Slim\Interfaces\RouteCollectorInterface;

return function (App $app, RouteCollectorInterface $router): void {
    /** @var ContainerInterface $container */
    $container = $app->getContainer();

    $errorMiddleware = $app->addErrorMiddleware(
        getenv('APP_ENV') === 'dev',
        true,
        true
    );
};
