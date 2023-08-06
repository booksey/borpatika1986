<?php

use App\Factory\ErrorHandlerFactory;
use App\Factory\ServerRequestFactory;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Interfaces\ErrorHandlerInterface;

use function DI\factory;

return [
    'App' => factory(App\Factory\AppFactory::class),
    Twig\Environment::class => factory(App\Factory\TwigFactory::class),
    ServerRequestInterface::class => factory(ServerRequestFactory::class),
];
