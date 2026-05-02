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
use Lark\Services\FaceVerify\CropFaceImageResource;
use Lark\Services\FaceVerify\QueryAuthResultResource;
use Lark\Services\FaceVerify\UploadFaceImageResource;

final class FaceVerifyService
{
    public function __construct(
        private readonly LarkClient $client
    ) {
    }
    public function cropFaceImage(): CropFaceImageResource
    {
        return new CropFaceImageResource($this->client);
    }

    public function queryAuthResult(): QueryAuthResultResource
    {
        return new QueryAuthResultResource($this->client);
    }

    public function uploadFaceImage(): UploadFaceImageResource
    {
        return new UploadFaceImageResource($this->client);
    }
}
