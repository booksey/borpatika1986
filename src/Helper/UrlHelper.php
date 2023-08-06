<?php

namespace App\Helper;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;
use RuntimeException;

class UrlHelper implements UrlHelperInterface
{
    private App $app;
    private ServerRequestInterface $request;
    private string $baseUrl;

    public function __construct(App $app, ServerRequestInterface $request)
    {
        $this->request = $request;
        $this->app = $app;
        $this->setBaseUrl();
    }

    private function setBaseUrl(): void
    {
        $path = $this->app->getBasePath();
        $this->baseUrl = rtrim(
            $this->request->getUri()->getHost() . (strpos($path, '.php') === false ? $path : dirname($path)),
            '/'
        );
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function assetFor(string $file): string
    {
        return ($this->request->getServerParams()['HTTP_X_PROTOCOL'] ?? $this->request->getUri()->getScheme()) .
            '://' .
            $this->getBaseUrl() . '/' .
            $this->getBinDirectory() .
            '/' .
            $file;
    }

    private function getBinDirectory(): string
    {
        $container = $this->app->getContainer();
        if (!$container instanceof ContainerInterface) {
            throw new RuntimeException('Cannot use this code without Psr\\ContainerInterface.');
        }
        /** @var ?array $config */
        $config = $container->get('config');

        if (!isset($config['twig']['binDirectory'])) {
            throw new RuntimeException('Please set twig.binDirectory in configuration.');
        }

        return $config['twig']['binDirectory'];
    }
}
