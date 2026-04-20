<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 操作工作表
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjMzUjL4IzM14COyMTN
 */
final class SheetsV2SpreadsheetsSpreadsheettokenSheetsBatchUpdate extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v2/spreadsheets/:spreadsheetToken/sheets_batch_update';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
