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

namespace Lark\Core\Response;

use Lark\Core\Exception\ApiException;
use Lark\Core\Exception\DecodeException;
use Lark\Core\Exception\InvalidResponseException;
use Psr\Http\Message\ResponseInterface;

final class ResponseDecoder
{
    /** @return array<string, mixed> */
    public function decode(ResponseInterface $response, string $method, string $path): array
    {
        $rawBody = (string) $response->getBody();

        if ($rawBody === '') {
            return [];
        }

        try {
            $decoded = json_decode($rawBody, true, flags: JSON_THROW_ON_ERROR);
        } catch (\JsonException $exception) {
            throw new DecodeException('Unable to decode Lark API response.', $rawBody);
        }

        if (!is_array($decoded)) {
            throw new InvalidResponseException('Lark API response must decode to an array.', $rawBody);
        }

        if (array_key_exists('code', $decoded) && (int) $decoded['code'] !== 0) {
            $message = isset($decoded['msg']) && is_string($decoded['msg']) ? $decoded['msg'] : 'Lark API request failed.';

            throw new ApiException(
                message: sprintf('Lark API request failed: %s', $message),
                larkCode: $decoded['code'],
                larkMessage: $message,
                httpStatusCode: $response->getStatusCode(),
                method: $method,
                path: $path,
                rawResponse: $rawBody
            );
        }

        return $decoded;
    }
}
