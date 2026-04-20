<?php

declare(strict_types=1);

namespace Lark\Api\Application\Application;

use Lark\Request\RestRequest;

/**
 * 获取应用版本列表
 *
 * @see https://open.feishu.cn/document/ukTMukTMukTM/uQjN3QjL0YzN04CN2cDN
 */
final class ApplicationV6ApplicationsAppIdAppVersions extends RestRequest
{
    protected string $apiUri = '/open-apis/application/v6/applications/:app_id/app_versions';

    protected string $httpMethod = 'GET';
}
