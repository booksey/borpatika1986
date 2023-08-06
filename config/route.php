<?php

declare(strict_types=1);

use Slim\App as SlimApp;
use Slim\Interfaces\RouteCollectorProxyInterface;

return function (SlimApp $app): void {
    /** Index group */
    $app->get('[/]', App\Action\Index\IndexAction::class)->setName('index');
};
