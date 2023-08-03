<?php
require_once __DIR__ . '/vendor/autoload.php';
//permissions: 
//pages_manage_metadata, pages_manage_posts, pages_manage_engagement, pages_show_list
//
$appId = '818057829697963';
$appSecret = 'be07db9d90f1006fabcb5596ea16f826';
$pageId = '102576749830050';
$userAccessToken = 'EAALoBO5YSasBO4FbwC2m56P07JVc1hzBngEinrAf37iKlZClRddZCe3dqjhwzUlHrHocAIiTcZAApQuOICAzw0TPFfhXR2dyqgQKcmD9CeOpZCcAjR1yfaFw5YsGp6x2ZCbKxQYyafQp8e2xLJZBjV7hwnZCaPHM5CoXplXJuExEdOaubF3kbR3JAwo2aPdCKZAc8WHYFZCiNRJhCiY1Hf1TQ8EQhSdVEMK6sm1ZAL';

$fb = new \Facebook\Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v17.0'
]);


echo var_export($fb->sendRequest('POST', "$pageId/feed", [
    'message' => 'API_TEST',
    'access_token' => $userAccessToken,
]), true);
