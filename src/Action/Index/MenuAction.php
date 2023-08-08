<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use App\Helper\CookieHelper;
use App\Helper\CookieHelperInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class MenuAction extends AbstractAction
{
    private array $config;
    private CookieHelperInterface $cookieHelper;
    private Environment $twig;

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
        $menus = $this->config['menu_' . $this->cookieHelper->getLanguage()];
        $cookieFooterClass = !$this->cookieHelper->isApproved() ? 'd-block' : 'd-none';
        $this->response->getBody()->write($this->twig->render(
            'menu.html.twig',
            [
                'language' => $this->cookieHelper->getLanguage(),
                'cookieFooterDisplayClass' => $cookieFooterClass,
                'menus' => $menus
            ]
        ));
        return $this->response;
    }
}
