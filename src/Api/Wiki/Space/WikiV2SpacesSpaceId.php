<?php

declare(strict_types=1);

namespace Lark\Api\Wiki\Space;

use Lark\Request\RestRequest;

/**
 * 获取知识空间信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/wiki-v2/wiki-qa#b5da330b
 */
final class WikiV2SpacesSpaceId extends RestRequest
{
    protected string $apiUri = '/open-apis/wiki/v2/spaces/:space_id';

    protected string $httpMethod = 'GET';
}
