<?php

declare(strict_types=1);

namespace Lark\Api\Wiki\Space;

use Lark\Request\RestRequest;

/**
 * 创建知识空间节点
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/wiki-overview
 */
final class WikiV2SpacesSpaceIdNodes extends RestRequest
{
    protected string $apiUri = '/open-apis/wiki/v2/spaces/:space_id/nodes';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
