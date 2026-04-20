<?php

declare(strict_types=1);

namespace Lark\Api\Sheets\Spreadsheet;

use Lark\Request\RestRequest;

/**
 * 更新下拉列表设置
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/ugjM14COyUjL4ITN
 */
final class SheetsV2SpreadsheetsSpreadsheettokenDatavalidationSheetidDatavalidationid extends RestRequest
{
    protected string $apiUri = '/open-apis/sheets/v2/spreadsheets/:spreadsheetToken/dataValidation/:sheetId/:dataValidationId';

    protected string $httpMethod = 'PUT';

    protected array $headers = [
        'Content-Type' => 'application/json; charset=utf-8',
    ];
}
