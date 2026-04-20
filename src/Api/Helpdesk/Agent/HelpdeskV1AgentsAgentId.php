<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Agent;

use Lark\Request\RestRequest;

/**
 * 更新客服信息
 *
 * @see https://feishu.apifox.cn/api-59950579
 */
final class HelpdeskV1AgentsAgentId extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/agents/:agent_id';

    protected string $httpMethod = 'PATCH';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
