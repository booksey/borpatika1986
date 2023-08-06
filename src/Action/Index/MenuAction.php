<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class MenuAction extends AbstractAction
{
    private ContainerInterface $container;
    private Environment $twig;

    public function __construct(ContainerInterface $container, Environment $twig)
    {
        $this->container = $container;
        $this->twig = $twig;
    }

    public function invoke(): ResponseInterface
    {
        $cookies = $this->request->getCookieParams();
        $language = !empty($cookies['language']) && in_array($cookies['language'], ['hu', 'gb'], true)
            ? $cookies['language']
            : 'hu';
        $cookieFooterDisplayClass = !empty($cookies['cookiesApproved']) && $cookies['cookiesApproved']
            ? 'd-none'
            : 'd-block';
        $config = $this->container->get('config');
        $menus = $config['etlap_' . $language];
        $this->response->getBody()->write($this->twig->render(
            'menu.html.twig',
            [
                'language' => $language,
                'cookieFooterDisplayClass' => $cookieFooterDisplayClass,
                'menus' => $menus
            ]
        ));
        return $this->response;
    }
}
