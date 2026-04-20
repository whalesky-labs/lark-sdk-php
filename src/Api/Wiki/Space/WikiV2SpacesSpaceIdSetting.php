<?php

declare(strict_types=1);

namespace Lark\Api\Wiki\Space;

use Lark\Request\RestRequest;

/**
 * 更新知识空间设置
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/wiki-v2/wiki-qa#b5da330b
 */
final class WikiV2SpacesSpaceIdSetting extends RestRequest
{
    protected string $apiUri = '/open-apis/wiki/v2/spaces/:space_id/setting';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
