<?php

namespace App\Handler;

use App\Renderer\JsonErrorRenderer;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Log\LoggerInterface;
use Slim\Handlers\ErrorHandler as SlimErrorHandler;
use Slim\Interfaces\CallableResolverInterface;

class ErrorHandler extends SlimErrorHandler
{
    public function __construct(
        CallableResolverInterface $callableResolver,
        ResponseFactoryInterface $responseFactory,
        ?LoggerInterface $logger = null
    ) {
        parent::__construct($callableResolver, $responseFactory, $logger);
        $this->defaultErrorRenderer = JsonErrorRenderer::class;
        $this->errorRenderers['application/json'] = JsonErrorRenderer::class;
    }

    protected function writeToErrorLog(): void
    {
        $renderer = $this->callableResolver->resolve($this->logErrorRenderer);
        $error = $renderer($this->exception, $this->logErrorDetails);
        $this->logError($error);
    }
}
