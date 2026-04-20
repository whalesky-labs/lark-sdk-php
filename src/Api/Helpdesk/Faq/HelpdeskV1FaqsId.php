<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Faq;

use Lark\Request\RestRequest;

/**
 * 获取知识库详情
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1FaqsId extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/faqs/:id';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
