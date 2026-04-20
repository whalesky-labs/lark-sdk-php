<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\AgentSchedule;

use Lark\Request\RestRequest;

/**
 * 查询全部客服工作日程
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1AgentSchedulesGet extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/agent_schedules';

    protected string $httpMethod = 'GET';
}
