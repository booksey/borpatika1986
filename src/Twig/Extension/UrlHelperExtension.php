<?php

namespace App\Twig\Extension;

use Twig\Extension\AbstractExtension;
use App\Helper\UrlHelperInterface;
use Twig\TwigFunction;

class UrlHelperExtension extends AbstractExtension
{
    private UrlHelperInterface $urlHelper;
    public function __construct(UrlHelperInterface $urlHelper)
    {
        $this->urlHelper = $urlHelper;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('baseUrl', [$this->urlHelper, 'getBaseUrl']),
            new TwigFunction('asset', [$this->urlHelper, 'assetFor']),
        ];
    }
}
