<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Category;

use Lark\Request\RestRequest;

/**
 * 创建知识库分类
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1Categories extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/categories';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
