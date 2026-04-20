<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Faq;

use Lark\Request\RestRequest;

/**
 * 创建知识库
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1Faqs extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/faqs';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
