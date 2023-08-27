<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use App\Helper\CookieHelperInterface;
use App\ValueObject\WeeklyMenu;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class WeeklyMenuAction extends AbstractAction
{
    private Environment $twig;
    private CookieHelperInterface $cookieHelper;

    public function __construct(Environment $twig, CookieHelperInterface $cookieHelper)
    {
        $this->twig = $twig;
        $this->cookieHelper = $cookieHelper;
    }

    public function invoke(): ResponseInterface
    {
        $weeklyMenu = new WeeklyMenu();
        $cookieFooterClass = !$this->cookieHelper->isApproved() ? 'd-block' : 'd-none';
        $ogTitle = 'Borpatika ' . $weeklyMenu->weekNumber . '. heti menü';
        $this->response->getBody()->write($this->twig->render(
            'weeklymenu.html.twig',
            [
                'language' => $this->cookieHelper->getLanguage(),
                'cookieFooterDisplayClass' => $cookieFooterClass,
                'weekNumber' => $weeklyMenu->weekNumber,
                'weeklyMenu' => $weeklyMenu->menu,
                'ogTitle' => $ogTitle,
                'ogUrl' => 'https://borpatika1986.hu/hetimenu',
                'ogDescription' => 'Borpatika ' . $weeklyMenu->weekNumber . '. heti menü',
            ]
        ));
        return $this->response;
    }
}
