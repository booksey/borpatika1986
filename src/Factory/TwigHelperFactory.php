<?php

namespace App\Factory;

use App\Helper\TwigHelper;
use App\Helper\TwigHelperInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

class TwigHelperFactory
{
    public function __invoke(ContainerInterface $container): TwigHelperInterface
    {
        /** @var App $app */
        $app = $container->get('App');
        /** @var ServerRequestInterface $request */
        $request = $container->get(ServerRequestInterface::class);

        return new TwigHelper(
            $app,
            $request
        );
    }
}
