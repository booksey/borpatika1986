<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use App\Helper\CookieHelper;
use App\Helper\CookieHelperInterface;
use App\ValueObject\WeeklyMenu;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class WeeklyMenuAction extends AbstractAction
{
    private Environment $twig;
    private CookieHelper $cookieHelper;

    public function __construct(Environment $twig, CookieHelperInterface $cookieHelper)
    {
        $this->twig = $twig;
        $this->cookieHelper = $cookieHelper;
    }

    public function invoke(): ResponseInterface
    {
        $weeklyMenu = new WeeklyMenu();
        $cookieFooterDisplayClass = $this->cookieHelper->isApproved() ? 'd-block' : 'd-none';
        $this->response->getBody()->write($this->twig->render(
            'weeklymenu.html.twig',
            [
                'language' => $this->cookieHelper->getLanguage(),
                'cookieFooterDisplayClass' => $cookieFooterDisplayClass,
                'weekNumber' => $weeklyMenu->weekNumber,
                'weeklyMenu' => $weeklyMenu->menu,
            ]
        ));
        return $this->response;
    }
}
