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

namespace Lark\Api\Wiki\Space;

use Lark\Request\RestRequest;

/**
 * 获取知识空间节点信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/wiki-v2/wiki-qa#b5da330b
 */
final class WikiV2SpacesGetNode extends RestRequest
{
    protected string $apiUri = '/open-apis/wiki/v2/spaces/get_node';

    protected string $httpMethod = 'GET';
}
