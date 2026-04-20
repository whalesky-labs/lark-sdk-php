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
