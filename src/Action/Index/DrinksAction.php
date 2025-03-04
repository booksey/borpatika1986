<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use App\Helper\CookieHelperInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class DrinksAction extends AbstractAction
{
    private Environment $twig;
    private CookieHelperInterface $cookieHelper;
    private array $config;

    public function __construct(ContainerInterface $container, Environment $twig, CookieHelperInterface $cookieHelper)
    {
        /** @var array $config */
        $config = $container->get('config');
        $this->config = $config;
        $this->twig = $twig;
        $this->cookieHelper = $cookieHelper;
    }

    public function invoke(): ResponseInterface
    {
        $cookieFooterClass = !$this->cookieHelper->isApproved() ? 'd-block' : 'd-none';
        $this->response->getBody()->write($this->twig->render(
            'drinks.html.twig',
            [
                'language' => $this->cookieHelper->getLanguage(),
                'cookieFooterDisplayClass' => $cookieFooterClass,
                'drinks' => $this->config['drinks']
            ]
        ));
        return $this->response;
    }
}
