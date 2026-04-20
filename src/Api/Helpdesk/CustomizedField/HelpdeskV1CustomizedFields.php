<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\CustomizedField;

use Lark\Request\RestRequest;

/**
 * 获取服务台自定义字段
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1CustomizedFields extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/customized_fields';

    protected string $httpMethod = 'GET';
}
