<?php

namespace App\Twig\Extension;

use Twig\Extension\AbstractExtension;
use App\Helper\TwigHelperInterface;
use Twig\TwigFunction;

class TwigHelperExtension extends AbstractExtension
{
    private TwigHelperInterface $helper;
    public function __construct(TwigHelperInterface $helper)
    {
        $this->helper = $helper;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('baseUrl', [$this->helper, 'getBaseUrl']),
            new TwigFunction('asset', [$this->helper, 'assetFor']),
            new TwigFunction('getFbPageId', [$this->helper, 'getFbPageId']),
        ];
    }
}
