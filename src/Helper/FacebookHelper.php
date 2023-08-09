<?php

namespace App\Helper;

use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use RuntimeException;

class FacebookHelper implements FacebookHelperInterface
{
    private Facebook $fbClient;
    private string $appId;
    private string $appSecret;
    private string $pageId;
    private string $accessToken;

    public function __construct(string $appId, string $appSecret, string $pageId, string $accessToken)
    {
        $this->appId = $appId;
        $this->appSecret = $appSecret;
        $this->pageId = $pageId;
        $this->accessToken = $accessToken;

        try {
            $this->fbClient = new Facebook([
                'app_id' => $this->appId,
                'app_secret' => $this->appSecret,
                'default_graph_version' => 'v17.0'
            ]);
        } catch (FacebookSDKException $exception) {
            throw new RuntimeException("Facebook client init failed - " . $exception->getMessage());
        }
    }

    public function publishPagePost(string $message): void
    {
        try {
            $this->fbClient->sendRequest('POST', "$this->pageId/feed", [
                'message' => $message,
                'access_token' => $this->accessToken,
            ]);
        } catch (FacebookSDKException $exception) {
            throw new RuntimeException("Publish page post failed - " . $exception->getMessage());
        }
    }
}
