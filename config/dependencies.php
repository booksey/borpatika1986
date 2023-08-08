<?php

use App\Factory\ServerRequestFactory;
use Psr\Http\Message\ServerRequestInterface;

use function DI\factory;

return [
    'App' => factory(App\Factory\AppFactory::class),
    App\Helper\UrlHelperInterface::class => factory(App\Factory\UrlHelperFactory::class),
    App\Helper\CookieHelperInterface::class => factory(App\Factory\CookieHelperFactory::class),
    App\Helper\FacebookHelperInterface::class => factory(App\Factory\FacebookHelperFactory::class),
    Twig\Environment::class => factory(App\Factory\TwigFactory::class),
    ServerRequestInterface::class => factory(ServerRequestFactory::class),
];
