<?php

declare(strict_types=1);

use Slim\App as SlimApp;

return function (SlimApp $app): void {
    $app->get('[/]', App\Action\Index\IndexAction::class)->setName('index');
};
