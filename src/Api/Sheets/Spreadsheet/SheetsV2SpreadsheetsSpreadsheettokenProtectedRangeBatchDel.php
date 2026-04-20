<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 删除保护范围
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class SheetsV2SpreadsheetsSpreadsheettokenProtectedRangeBatchDel extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v2/spreadsheets/:spreadsheetToken/protected_range_batch_del';

    protected string $httpMethod = 'DELETE';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
