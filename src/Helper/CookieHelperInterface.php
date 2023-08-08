<?php

namespace App\Helper;

interface CookieHelperInterface
{
    public function getLanguage(): string;
    public function isApproved(): bool;
}
