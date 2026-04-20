<?php

declare(strict_types=1);

namespace Lark\Api\Attendance\File;

use Lark\Request\RestRequest;

/**
 * 上传用户人脸识别照片
 *
 * @see https://feishu.apifox.cn/api-59179593
 */
final class AttendanceV1FilesUpload extends RestRequest
{
    protected string $apiUri = '/open-apis/attendance/v1/files/upload';

    protected string $httpMethod = 'POST';
}
