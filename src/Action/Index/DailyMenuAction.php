<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use App\Helper\CookieHelperInterface;
use App\ValueObject\WeeklyMenu;
use DateTime;
use DateTimeZone;
use IntlDateFormatter;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class DailyMenuAction extends AbstractAction
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
        $cookieFooterClass = !$this->cookieHelper->isApproved() ? 'd-block' : 'd-none';
        $ogTitle = 'Borpatika napi menü - 1.890 Ft';

        $weeklyMenu = new WeeklyMenu();
        $now = new DateTime('now', new DateTimeZone('Europe/Budapest'));
        $todayDate =  IntlDateFormatter::formatObject(
            $now, //a DateTime object
            "Y. MMMM dd. EEEE",
            'hu_HU'  //the locale
        );
        $dailyMenu = $weeklyMenu->getMenuForDate($now);

        $this->response->getBody()->write($this->twig->render(
            'dailymenu.html.twig',
            [
                'language' => $this->cookieHelper->getLanguage(),
                'cookieFooterDisplayClass' => $cookieFooterClass,
                'todayDate' => $todayDate,
                'dailyMenu' => $dailyMenu,
                'ogTitle' => $ogTitle,
                'ogUrl' => 'https://borpatika1986.hu/napimenu',
                'ogDescription' => 'Napi menü 12:00-tól',
            ]
        ));
        return $this->response;
    }
}
