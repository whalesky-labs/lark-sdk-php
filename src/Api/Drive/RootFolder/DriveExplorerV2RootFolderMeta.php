<?php

declare(strict_types=1);

namespace Lark\Api\Drive\RootFolder;

use Lark\Request\RestRequest;

/**
 * 获取我的空间（root folder）元信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/docs-overview#6d744fe3
 */
final class DriveExplorerV2RootFolderMeta extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/explorer/v2/root_folder/meta';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
