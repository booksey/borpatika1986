<?php

namespace App\Helper;

use Psr\Http\Message\ServerRequestInterface;

class CookieHelper implements CookieHelperInterface
{
    private const COOKIE_KEY_LANGUAGE = 'language';
    private const COOKIE_KEY_APPROVED = 'cookiesApproved';

    private array $cookies;

    public function __construct(ServerRequestInterface $request)
    {
        $this->cookies = $request->getCookieParams();
    }

    public function isApproved(): bool
    {
        return !empty($this->cookies[self::COOKIE_KEY_APPROVED]) && $this->cookies[self::COOKIE_KEY_APPROVED];
    }

    public function getLanguage(): string
    {
        $cookieKey = self::COOKIE_KEY_LANGUAGE;
        return !empty($this->cookies[$cookieKey]) && in_array($this->cookies[$cookieKey], ['hu', 'gb'], true)
            ? $this->cookies[$cookieKey]
            : 'hu';
    }
}
