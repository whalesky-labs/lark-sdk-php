<?php

declare(strict_types=1);

namespace Lark\Api\Helpdesk\AgentSkill;

use Lark\Request\RestRequest;

/**
 * 删除客服技能
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDOyYjL4gjM24CO4IjN
 */
final class HelpdeskV1AgentSkillsAgentSkillId extends RestRequest
{
    protected string $apiUri = '/open-apis/helpdesk/v1/agent_skills/:agent_skill_id';

    protected string $httpMethod = 'DELETE';
}
