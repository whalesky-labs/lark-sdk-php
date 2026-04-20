<?php

declare(strict_types=1);

namespace Lark\Tests\Support;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class MockHttpClient implements ClientInterface
{
    /** @var list<RequestInterface> */
    private array $requests = [];

    /**
     * @param callable(RequestInterface): ResponseInterface $handler
     */
    public function __construct(
        private readonly mixed $handler
    ) {
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $this->requests[] = $request;

        return ($this->handler)($request);
    }

    /**
     * @return list<RequestInterface>
     */
    public function requests(): array
    {
        return $this->requests;
    }
}
