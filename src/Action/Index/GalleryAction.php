<?php

declare(strict_types=1);

namespace App\Action\Index;

use App\Action\AbstractAction;
use App\Helper\CookieHelperInterface;
use Psr\Http\Message\ResponseInterface;
use Twig\Environment;

class GalleryAction extends AbstractAction
{
    private const ALBUM_IMAGES_GLOB_PATTERN = __DIR__ . '/../../../public/assets/img/photoalbum/*.jpg';
    private Environment $twig;
    private CookieHelperInterface $cookieHelper;

    public function __construct(Environment $twig, CookieHelperInterface $cookieHelper)
    {
        $this->twig = $twig;
        $this->cookieHelper = $cookieHelper;
    }

    public function invoke(): ResponseInterface
    {
        $cookieFooterClass = !$this->cookieHelper->isApproved() ? 'd-block' : 'd-none';
        $images = [];
        $imagePaths = glob(self::ALBUM_IMAGES_GLOB_PATTERN);
        if ($imagePaths) {
            foreach ($imagePaths as $path) {
                $images[] = pathinfo($path, PATHINFO_BASENAME);
            }
        }
        $this->response->getBody()->write($this->twig->render(
            'gallery.html.twig',
            [
                'language' => $this->cookieHelper->getLanguage(),
                'cookieFooterDisplayClass' => $cookieFooterClass,
                'galleryImages' => $images
            ]
        ));
        return $this->response;
    }
}
