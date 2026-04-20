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

namespace Lark\Api\Wiki\Node;

use Lark\Request\RestRequest;

/**
 * 搜索 Wiki
 *
 * @see https://feishu.apifox.cn/api-58968199
 */
final class WikiV1NodesSearch extends RestRequest
{
    protected string $apiUri = '/open-apis/wiki/v1/nodes/search';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
