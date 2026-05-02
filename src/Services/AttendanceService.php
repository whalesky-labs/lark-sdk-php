<?php

declare(strict_types=1);

/**
 * This file is part of Lark SDK for PHP.
 *
 * @link     https://github.com/whalesky-labs/lark-sdk-php
 * @document https://github.com/whalesky-labs/lark-sdk-php
 * @contact  westng
 * @license  https://github.com/whalesky-labs/lark-sdk-php/blob/main/LICENSE
 */

namespace Lark\Services;

use Lark\LarkClient;
use Lark\Services\Attendance\ApprovalInfoResource;
use Lark\Services\Attendance\FileResource;
use Lark\Services\Attendance\GroupResource;
use Lark\Services\Attendance\ShiftResource;
use Lark\Services\Attendance\UserApprovalResource;
use Lark\Services\Attendance\UserFlowResource;
use Lark\Services\Attendance\UserSettingResource;
use Lark\Services\Attendance\UserStatsDataResource;
use Lark\Services\Attendance\UserStatsFieldResource;
use Lark\Services\Attendance\UserStatsViewResource;
use Lark\Services\Attendance\UserTaskRemedyResource;
use Lark\Services\Attendance\UserTaskResource;

final class AttendanceService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function approvalInfo(): ApprovalInfoResource
    {
        return new ApprovalInfoResource($this->client);
    }

    public function file(): FileResource
    {
        return new FileResource($this->client);
    }

    public function group(): GroupResource
    {
        return new GroupResource($this->client);
    }

    public function shift(): ShiftResource
    {
        return new ShiftResource($this->client);
    }

    public function userApproval(): UserApprovalResource
    {
        return new UserApprovalResource($this->client);
    }

    public function userFlow(): UserFlowResource
    {
        return new UserFlowResource($this->client);
    }

    public function userSetting(): UserSettingResource
    {
        return new UserSettingResource($this->client);
    }

    public function userStatsData(): UserStatsDataResource
    {
        return new UserStatsDataResource($this->client);
    }

    public function userStatsField(): UserStatsFieldResource
    {
        return new UserStatsFieldResource($this->client);
    }

    public function userStatsView(): UserStatsViewResource
    {
        return new UserStatsViewResource($this->client);
    }

    public function userTask(): UserTaskResource
    {
        return new UserTaskResource($this->client);
    }

    public function userTaskRemedy(): UserTaskRemedyResource
    {
        return new UserTaskRemedyResource($this->client);
    }
}
