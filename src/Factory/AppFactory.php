<?php

namespace App\Factory;

use Slim\App;
use Slim\Factory\AppFactory as SlimAppFactory;
use Psr\Container\ContainerInterface;

class AppFactory
{
    public function __invoke(ContainerInterface $container): App
    {
        $app = SlimAppFactory::createFromContainer($container);
        // $app->setBasePath(
        //     getenv('APP_ENV') === 'dev'
        //         ? strval(filter_input(INPUT_SERVER, 'SCRIPT_NAME', FILTER_SANITIZE_STRING))
        //         : ''
        // );
        return $app;
    }
}
