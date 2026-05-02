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
use Lark\Services\Hire\ApplicationResource;
use Lark\Services\Hire\AttachmentResource;
use Lark\Services\Hire\EhrImportTaskResource;
use Lark\Services\Hire\EmployeeResource;
use Lark\Services\Hire\JobProcessResource;
use Lark\Services\Hire\JobResource;
use Lark\Services\Hire\NoteResource;
use Lark\Services\Hire\ReferralResource;
use Lark\Services\Hire\ResumeSourceResource;
use Lark\Services\Hire\TalentResource;

final class HireService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function application(): ApplicationResource
    {
        return new ApplicationResource($this->client);
    }

    public function attachment(): AttachmentResource
    {
        return new AttachmentResource($this->client);
    }

    public function ehrImportTask(): EhrImportTaskResource
    {
        return new EhrImportTaskResource($this->client);
    }

    public function employee(): EmployeeResource
    {
        return new EmployeeResource($this->client);
    }

    public function job(): JobResource
    {
        return new JobResource($this->client);
    }

    public function jobProcess(): JobProcessResource
    {
        return new JobProcessResource($this->client);
    }

    public function note(): NoteResource
    {
        return new NoteResource($this->client);
    }

    public function referral(): ReferralResource
    {
        return new ReferralResource($this->client);
    }

    public function resumeSource(): ResumeSourceResource
    {
        return new ResumeSourceResource($this->client);
    }

    public function talent(): TalentResource
    {
        return new TalentResource($this->client);
    }
}
