<?php

namespace App\Helper;

interface TwigHelperInterface
{
    public function getBaseUrl(): string;
    public function assetFor(string $file): string;
    public function getFbPageId(): string;
}
