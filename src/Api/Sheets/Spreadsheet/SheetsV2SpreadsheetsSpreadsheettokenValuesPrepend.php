<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 插入数据
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class SheetsV2SpreadsheetsSpreadsheettokenValuesPrepend extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v2/spreadsheets/:spreadsheetToken/values_prepend';

    protected string $httpMethod = 'POST';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
