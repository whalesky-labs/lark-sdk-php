<?php

declare(strict_types=1);

namespace Lark\Api\Wiki\Space;

use Lark\Request\RestRequest;

/**
 * 添加知识空间成员
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/wiki-overview
 */
final class WikiV2SpacesSpaceIdMembers extends RestRequest
{
    protected string $apiUri = '/open-apis/wiki/v2/spaces/:space_id/members';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
