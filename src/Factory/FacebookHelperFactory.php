<?php

namespace App\Factory;

use App\Helper\FacebookHelper;
use App\Helper\FacebookHelperInterface;
use Psr\Container\ContainerInterface;
use Slim\App;

class FacebookHelperFactory
{
    public function __invoke(ContainerInterface $container): FacebookHelperInterface
    {
        /** @var App $app */
        $config = $container->get('config');
        return new FacebookHelper($config);
    }
}
