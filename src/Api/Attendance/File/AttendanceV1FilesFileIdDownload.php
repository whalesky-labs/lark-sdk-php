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

namespace Lark\Api\Attendance\File;

use Lark\Request\RestRequest;

/**
 * 下载用户人脸识别照片
 *
 * @see https://feishu.apifox.cn/api-59179620
 */
final class AttendanceV1FilesFileIdDownload extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/files/:file_id/download';

    protected string $httpMethod = 'GET';
}
