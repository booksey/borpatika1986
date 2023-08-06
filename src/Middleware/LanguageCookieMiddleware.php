<?php

namespace App\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class LanguageCookieMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $cookies = $request->getCookieParams();
        $language = !empty($cookies['language']) && in_array($cookies['language'], ['hu', 'gb'], true)
            ? $cookies['language']
            : 'hu';
        setcookie('language', $language, time() + 31556926, '/');
        return $handler->handle($request);
    }
}
