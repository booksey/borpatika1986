<?php

namespace App\Factory;

use App\Helper\FacebookHelper;
use App\Helper\FacebookHelperInterface;
use RuntimeException;

class FacebookHelperFactory
{
    public function __invoke(): FacebookHelperInterface
    {
        $env = getenv('APP_ENV');
        $appIdEnvKey = 'FACEBOOK_APP_ID' . ($env == 'dev' ? '_TEST' : '');
        $appSecretEnvKey = 'FACEBOOK_APP_SECRET' . ($env == 'dev' ? '_TEST' : '');
        $appPageIdEnvKey = 'FACEBOOK_APP_PAGE_ID' . ($env == 'dev' ? '_TEST' : '');
        $appAccessTokenKey = 'FACEBOOK_APP_USER_ACCESS_TOKEN' . ($env == 'dev' ? '_TEST' : '');

        $appId = getenv($appIdEnvKey);
        $appSecret = getenv($appSecretEnvKey);
        $pageId = getenv($appPageIdEnvKey);
        $accessToken = getenv($appAccessTokenKey);

        if (!$appId || !$appSecret || !$pageId || !$accessToken) {
            throw new RuntimeException("Invalid .env parameters.");
        }

        return new FacebookHelper($appId, $appSecret, $pageId, $accessToken);
    }
}
