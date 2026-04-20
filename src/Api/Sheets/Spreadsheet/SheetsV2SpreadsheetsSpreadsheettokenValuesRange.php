<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 读取单个范围
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class SheetsV2SpreadsheetsSpreadsheettokenValuesRange extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v2/spreadsheets/:spreadsheetToken/values/:range';

    protected string $httpMethod = 'GET';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
