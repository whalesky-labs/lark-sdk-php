<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\StartService;

use Lark\Request\RestRequest;

/**
 * 创建服务台对话
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1StartService extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/start_service';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
