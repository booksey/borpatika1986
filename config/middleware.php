<?php

declare(strict_types=1);

use App\Middleware\LanguageCookieMiddleware;
use Slim\App;

return function (App $app): void {
    $app->addErrorMiddleware(
        getenv('APP_ENV') === 'dev',
        true,
        true
    );

    $app->add(LanguageCookieMiddleware::class);
};
