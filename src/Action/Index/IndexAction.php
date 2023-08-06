<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ResponseInterface;

class IndexAction extends AbstractAction
{
    public function __construct()
    {
    }

    public function invoke(): ResponseInterface
    {
        return new HtmlResponse('Index', 200);
    }
}
