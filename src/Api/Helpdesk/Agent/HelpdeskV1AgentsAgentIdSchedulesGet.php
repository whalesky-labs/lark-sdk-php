<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\Agent;

use Lark\Request\RestRequest;

/**
 * 查询指定客服工作日程
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1AgentsAgentIdSchedulesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/agents/:agent_id/schedules';

    protected string $httpMethod = 'GET';
}
