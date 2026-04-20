<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Faq;

use Lark\Request\RestRequest;

/**
 * 搜索知识库
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1FaqsSearch extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/faqs/search';

    protected string $httpMethod = 'GET';
}
