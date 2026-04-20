<?php

declare(strict_types=1);

namespace Lark\Api\Wiki\Space;

use Lark\Request\RestRequest;

/**
 * 删除知识空间成员
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/wiki-overview
 */
final class WikiV2SpacesSpaceIdMembersMemberId extends RestRequest
{
    protected string $apiUri = '/open-apis/wiki/v2/spaces/:space_id/members/:member_id';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
