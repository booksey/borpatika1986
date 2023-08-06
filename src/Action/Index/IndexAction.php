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
        $cookies = $this->request->getCookieParams();
        $language = !empty($cookies['language']) && in_array($cookies['language'], ['hu', 'gb'], true)
            ? $cookies['language']
            : 'hu';
        $cookieFooterDisplayClass = !empty($cookies['cookiesApproved']) && $cookies['cookiesApproved']
            ? 'd-none'
            : 'd-block';
        $this->response->getBody()->write($this->twig->render(
            'index.html.twig',
            [
                'language' => $language,
                'cookieFooterDisplayClass' => $cookieFooterDisplayClass
            ]
        ));
        return $this->response;
    }
}
