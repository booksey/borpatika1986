<?php

namespace App\Helper;

interface FacebookHelperInterface
{
    public function publishPagePost(string $message): void;
}
