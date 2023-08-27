<?php

namespace App\Factory;

use App\Helper\FacebookHelper;
use App\Helper\FacebookHelperInterface;
use RuntimeException;

class FacebookHelperFactory
{
    public function __invoke(): FacebookHelperInterface
    {
        $appId = getenv('FACEBOOK_APP_ID');
        $appSecret = getenv('FACEBOOK_APP_SECRET');
        $pageId = getenv('FACEBOOK_APP_PAGE_ID');
        $accessToken = getenv('FACEBOOK_APP_USER_ACCESS_TOKEN');

        if (!$appId || !$appSecret || !$pageId || !$accessToken) {
            throw new RuntimeException("Invalid .env parameters.");
        }

        return new FacebookHelper($appId, $appSecret, $pageId, $accessToken);
    }
}
