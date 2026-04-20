<?php

declare(strict_types=1);

namespace Lark\Request;

abstract class RestRequest
{
    protected string $apiUri = '/';

    protected string $httpMethod = 'GET';

    /**
     * @var array<string, string>
     */
    protected array $headers = [];

    /**
     * @param array<string, mixed> $pathParams
     */
    public function apiUri(array $pathParams = []): string
    {
        $uri = $this->apiUri;

        foreach ($pathParams as $name => $value) {
            $uri = str_replace(':' . $name, rawurlencode((string) $value), $uri);
        }

        return $uri;
    }

    public function httpMethod(): string
    {
        return $this->httpMethod;
    }

    /**
     * @return array<string, string>
     */
    public function headers(): array
    {
        return $this->headers;
    }

    /**
     * @param array<string, mixed> $query
     * @param array<string, mixed> $payload
     * @return array<string, mixed>
     */
    public function requestOptions(array $query = [], array $payload = []): array
    {
        $options = [];

        if ($this->headers !== []) {
            $options['headers'] = $this->headers;
        }

        if ($query !== []) {
            $options['query'] = $query;
        }

        if ($payload !== []) {
            $options['json'] = $payload;
        }

        return $options;
    }
}
