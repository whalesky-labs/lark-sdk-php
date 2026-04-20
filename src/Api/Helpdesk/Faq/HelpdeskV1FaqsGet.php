<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Faq;

use Lark\Request\RestRequest;

/**
 * 获取全部知识库详情
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1FaqsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/faqs';

    protected string $httpMethod = 'GET';
}
