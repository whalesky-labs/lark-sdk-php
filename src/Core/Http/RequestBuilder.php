<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Core\Http;

use Lark\Core\Config;
use Lark\Core\Exception\LarkException;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

final class RequestBuilder
{
    public function __construct(
        private readonly Config $config,
        private readonly RequestFactoryInterface $requestFactory,
        private readonly StreamFactoryInterface $streamFactory
    ) {
    }

    /** @param array<string, mixed> $options */
    public function build(string $method, string $path, array $options = [], ?string $accessToken = null): RequestInterface
    {
        $uri = $this->buildUri($path, $options['query'] ?? []);
        $request = $this->requestFactory->createRequest(strtoupper($method), $uri);

        $headers = $this->normalizeHeaders($options['headers'] ?? []);
        $headers['Accept'] = $headers['Accept'] ?? 'application/json';
        $headers['User-Agent'] = $headers['User-Agent'] ?? $this->config->userAgent();

        $token = $accessToken ?? $this->config->defaultAccessToken();
        if ($token !== null && $token !== '') {
            $headers['Authorization'] = sprintf('Bearer %s', $token);
        }

        $body = null;

        if (array_key_exists('json', $options)) {
            $headers['Content-Type'] = $headers['Content-Type'] ?? 'application/json';

            try {
                $encoded = json_encode($options['json'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
            } catch (\JsonException $exception) {
                throw new LarkException('Unable to encode request JSON body.', 0, $exception);
            }

            $body = $this->streamFactory->createStream($encoded);
        } elseif (array_key_exists('form_params', $options)) {
            $headers['Content-Type'] = $headers['Content-Type'] ?? 'application/x-www-form-urlencoded';
            $body = $this->streamFactory->createStream(http_build_query((array) $options['form_params']));
        } elseif (array_key_exists('multipart', $options)) {
            [$contentType, $content] = $this->buildMultipartBody((array) $options['multipart']);
            $headers['Content-Type'] = $headers['Content-Type'] ?? $contentType;
            $body = $this->streamFactory->createStream($content);
        } elseif (array_key_exists('body', $options)) {
            $bodyContent = $options['body'];
            $body = $this->streamFactory->createStream((string) $bodyContent);
        }

        foreach ($headers as $name => $value) {
            $request = $request->withHeader($name, (string) $value);
        }

        if ($body !== null) {
            $request = $request->withBody($body);
        }

        return $request;
    }

    /** @param array<string, mixed> $query */
    private function buildUri(string $path, array $query): string
    {
        $uri = sprintf('%s/%s', $this->config->baseUri(), ltrim($path, '/'));

        if ($query === []) {
            return $uri;
        }

        return sprintf('%s?%s', $uri, http_build_query($query, arg_separator: '&', encoding_type: PHP_QUERY_RFC3986));
    }

    /**
     * @param array<int|string, mixed> $headers
     *
     * @return array<string, string>
     */
    private function normalizeHeaders(array $headers): array
    {
        $normalized = [];

        foreach ($headers as $name => $value) {
            if (!is_string($name)) {
                continue;
            }

            if (is_array($value)) {
                $normalized[$name] = implode(', ', array_map(static fn (mixed $item): string => (string) $item, $value));
                continue;
            }

            $normalized[$name] = (string) $value;
        }

        return $normalized;
    }

    /**
     * @param array<int, array<string, mixed>> $parts
     *
     * @return array{0: string, 1: string}
     */
    private function buildMultipartBody(array $parts): array
    {
        $boundary = '--------------------------' . bin2hex(random_bytes(12));
        $lines = [];

        foreach ($parts as $part) {
            $name = (string) ($part['name'] ?? '');
            $contents = $part['contents'] ?? '';
            $filename = isset($part['filename']) ? (string) $part['filename'] : null;
            $headers = isset($part['headers']) && is_array($part['headers']) ? $part['headers'] : [];

            $lines[] = sprintf('--%s', $boundary);

            $disposition = sprintf('Content-Disposition: form-data; name="%s"', $name);
            if ($filename !== null && $filename !== '') {
                $disposition .= sprintf('; filename="%s"', $filename);
            }
            $lines[] = $disposition;

            foreach ($headers as $headerName => $headerValue) {
                $lines[] = sprintf('%s: %s', $headerName, $headerValue);
            }

            $lines[] = '';
            $lines[] = (string) $contents;
        }

        $lines[] = sprintf('--%s--', $boundary);
        $lines[] = '';

        return [sprintf('multipart/form-data; boundary=%s', $boundary), implode("\r\n", $lines)];
    }
}
