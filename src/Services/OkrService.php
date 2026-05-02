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
use Lark\Services\Okr\ImageResource;
use Lark\Services\Okr\MetricSourceResource;
use Lark\Services\Okr\OkrResource;
use Lark\Services\Okr\PeriodResource;
use Lark\Services\Okr\ProgressRecordResource;
use Lark\Services\Okr\UserResource;

final class OkrService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function image(): ImageResource
    {
        return new ImageResource($this->client);
    }

    public function metricSource(): MetricSourceResource
    {
        return new MetricSourceResource($this->client);
    }

    public function okr(): OkrResource
    {
        return new OkrResource($this->client);
    }

    public function period(): PeriodResource
    {
        return new PeriodResource($this->client);
    }

    public function progressRecord(): ProgressRecordResource
    {
        return new ProgressRecordResource($this->client);
    }

    public function user(): UserResource
    {
        return new UserResource($this->client);
    }
}
