<?php

declare(strict_types=1);

namespace Lark\Api\Drive\Folder;

use Lark\Request\RestRequest;

/**
 * 获取文件夹元信息
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uUDN04SN0QjL1QDN/docs-overview#6d744fe3
 */
final class DriveExplorerV2FolderFoldertokenMeta extends RestRequest
{
    protected string $apiUri = '/open-apis/drive/explorer/v2/folder/:folderToken/meta';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
