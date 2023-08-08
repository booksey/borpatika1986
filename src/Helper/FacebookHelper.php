<?php

namespace App\Helper;

class FacebookHelper implements FacebookHelperInterface
{
    private \Facebook\Facebook $fbClient;
    private string $pageId;
    private string $accessToken;

    public function __construct(array $config)
    {
        $env = getenv('APP_ENV');
        $appIdEnvKey = 'FACEBOOK_APP_ID' . ($env == 'dev' ? '_TEST' : '');
        $appSecretEnvKey = 'FACEBOOK_APP_SECRET' . ($env == 'dev' ? '_TEST' : '');
        $appPageIdEnvKey = 'FACEBOOK_APP_PAGE_ID' . ($env == 'dev' ? '_TEST' : '');
        $appUserAccessTokenEnvKey = 'FACEBOOK_APP_USER_ACCESS_TOKEN' . ($env == 'dev' ? '_TEST' : '');

        $this->fbClient = new \Facebook\Facebook([
            'app_id' => getenv($appIdEnvKey),
            'app_secret' => getenv($appSecretEnvKey),
            'default_graph_version' => 'v17.0'
        ]);
        $this->pageId = getenv($appPageIdEnvKey);
        $this->accessToken = getenv($appUserAccessTokenEnvKey);
    }

    public function publishPagePost(string $message): void
    {
        $this->fbClient->sendRequest('POST', "$this->pageId/feed", [
            'message' => $message,
            'access_token' => $this->accessToken,
        ]);
    }
}
