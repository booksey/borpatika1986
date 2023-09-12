<?php

declare(strict_types=1);

use Slim\App as SlimApp;

return function (SlimApp $app): void {
    $app->get('[/]', App\Action\Index\IndexAction::class)->setName('index');
    $app->get('/etlap', App\Action\Index\MenuAction::class)->setName('menu');
    $app->get('/napimenu', App\Action\Index\DailyMenuAction::class)->setName('daily-menu');
    $app->get('/hetimenu', App\Action\Index\WeeklyMenuAction::class)->setName('weekly-menu');
    $app->get('/album', App\Action\Index\GalleryAction::class)->setName('gallery');
    $app->get('/itallap', App\Action\Index\DrinksAction::class)->setName('drinks');
    $app->get('/rendezvenyek', App\Action\Index\EventsAction::class)->setName('events');
    $app->get('/cookie-tajekoztato', App\Action\Index\CookieInfoAction::class)->setName('cookie-info');
};
