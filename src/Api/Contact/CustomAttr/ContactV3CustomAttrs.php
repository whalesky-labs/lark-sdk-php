<?php

declare(strict_types=1);

namespace Lark\Api\Contact\CustomAttr;

use Lark\Request\RestRequest;

/**
 * 获取企业自定义用户字段
 *
 * @see https://feishu.apifox.cn/api-9021013
 */
final class ContactV3CustomAttrs extends RestRequest
{
    protected string $apiUri = '/open-apis/contact/v3/custom_attrs';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
