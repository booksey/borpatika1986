<?php

namespace App\Helper;

interface UrlHelperInterface
{
    public function getBaseUrl(): string;
    public function assetFor(string $file): string;
}
