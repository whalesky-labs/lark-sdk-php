<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Category;

use Lark\Request\RestRequest;

/**
 * 更新知识库分类详情
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1CategoriesIdPatch extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/categories/:id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
