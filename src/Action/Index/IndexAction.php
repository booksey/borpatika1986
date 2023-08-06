<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class IndexAction extends AbstractAction
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function invoke(): ResponseInterface
    {
        $this->response->getBody()->write($this->twig->render(
            'index.html.twig',
            [
                'language' => 'hu',
                'cookieFooterDisplayClass' => 'd-block'
            ]
        ));
        return $this->response;
    }
}
