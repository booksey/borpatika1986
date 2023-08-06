<?php

namespace App\Handler;

use ErrorException;

class PhpErrorHandler
{
    /**
     * @return false
     */
    public function __invoke(int $severity, string $message, ?string $file = null, ?int $line = null): bool
    {
        if (!(error_reporting() & $severity)) {
            return false;
        }
        throw new ErrorException($message, 0, $severity, $file ?? __FILE__, $line ?? __LINE__);
    }
}
