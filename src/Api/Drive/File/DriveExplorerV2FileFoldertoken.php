<?php

declare(strict_types=1);

namespace Lark\Api\Drive\File;

use Lark\Request\RestRequest;

/**
 * 新建在线文档
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugDM2YjL4AjN24COwYjN
 */
final class DriveExplorerV2FileFoldertoken extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/explorer/v2/file/:folderToken';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
