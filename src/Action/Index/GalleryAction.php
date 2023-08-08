<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use App\Helper\CookieHelper;
use App\Helper\CookieHelperInterface;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class GalleryAction extends AbstractAction
{
    const ALBUM_IMAGES_GLOB_PATTERN = __DIR__ . '/../../../public/assets/img/photoalbum/*.jpg';
    private Environment $twig;
    private CookieHelper $cookieHelper;

    public function __construct(Environment $twig, CookieHelperInterface $cookieHelper)
    {
        $this->twig = $twig;
        $this->cookieHelper = $cookieHelper;
    }

    public function invoke(): ResponseInterface
    {
        $cookieFooterDisplayClass = $this->cookieHelper->isApproved() ? 'd-block' : 'd-none';
        $images = [];
        $imagePaths = glob(self::ALBUM_IMAGES_GLOB_PATTERN);
        foreach ($imagePaths as $path) {
            $images[] = pathinfo($path, PATHINFO_BASENAME);
        }
        $this->response->getBody()->write($this->twig->render(
            'gallery.html.twig',
            [
                'language' => $this->cookieHelper->getLanguage(),
                'cookieFooterDisplayClass' => $cookieFooterDisplayClass,
                'galleryImages' => $images
            ]
        ));
        return $this->response;
    }
}
