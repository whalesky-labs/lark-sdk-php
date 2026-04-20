<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\AgentSkill;

use Lark\Request\RestRequest;

/**
 * 查询全部客服技能
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1AgentSkillsGet extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/agent_skills';

    protected string $httpMethod = 'GET';
}
