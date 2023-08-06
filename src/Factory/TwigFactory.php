<?php

declare(strict_types=1);

namespace App\Factory;

use App\Twig\Extension\UrlHelper;
use App\Twig\Extension\UrlHelperExtension;
use Psr\Container\ContainerInterface;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Extension\ExtensionInterface;
use Twig\Extension\ProfilerExtension;
use Twig\Extension\StringLoaderExtension;
use Twig\Loader\FilesystemLoader;

class TwigFactory
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke(): Environment
    {
        /** @var array $config */
        $config = $this->container->get('config');
        $loader = new FilesystemLoader(
            $config['twig']['paths'],
            $config['twig']['rootPath']
        );

        $twig = new Environment($loader, $config['twig']['settings']);
        $this->setExtensions($twig);

        return $twig;
    }

    private function setExtensions(Environment $twig): void
    {
        /** @var string[] $extensions */
        $extensions = [
            StringLoaderExtension::class,
            UrlHelperExtension::class
        ];

        if (getenv('APP_ENV') === 'dev') {
            $extensions = [
                ...$extensions,
                DebugExtension::class,
                ProfilerExtension::class,
            ];
        }

        foreach ($extensions as $extensionClass) {
            $extension = $this->container->get($extensionClass);
            if (!$extension || !$extension instanceof ExtensionInterface) {
                continue;
            }

            $twig->addExtension($extension);
        }
    }
}
