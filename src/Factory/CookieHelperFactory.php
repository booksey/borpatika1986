<?php

namespace App\Factory;

use App\Helper\CookieHelper;
use App\Helper\CookieHelperInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

class CookieHelperFactory
{
    public function __invoke(ContainerInterface $container): CookieHelperInterface
    {
        /** @var App $app */
        $app = $container->get('App');
        /** @var ServerRequestInterface $request */
        $request = $container->get(ServerRequestInterface::class);

        return new CookieHelper($request);
    }
}
