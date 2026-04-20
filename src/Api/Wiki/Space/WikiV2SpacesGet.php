<?php

declare(strict_types=1);

namespace Lark\Api\Wiki\Space;

use Lark\Request\RestRequest;

/**
 * 获取知识空间列表
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/wiki-v2/space/get
 */
final class WikiV2SpacesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/wiki/v2/spaces';

    protected string $httpMethod = 'GET';
}
