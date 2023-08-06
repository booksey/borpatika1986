<?php

namespace App\Factory;

use App\Helper\UrlHelper;
use App\Helper\UrlHelperInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

class UrlHelperFactory
{
    public function __invoke(ContainerInterface $container): UrlHelperInterface
    {
        /** @var App $app */
        $app = $container->get('App');
        /** @var ServerRequestInterface $request */
        $request = $container->get(ServerRequestInterface::class);

        return new UrlHelper(
            $app,
            $request
        );
    }
}
