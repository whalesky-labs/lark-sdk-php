# API Mapping

## Acs

### Device

| API Name | Call |
| --- | --- |
| 获取设备列表 | `$client->acs()->device()->get()` |

### User

| API Name | Call |
| --- | --- |
| 上传人脸图片 | `$client->acs()->user()->updateFace()` |
| 下载人脸图片 | `$client->acs()->user()->getFace()` |
| 修改用户部分信息 | `$client->acs()->user()->patch()` |
| 获取单个用户信息 | `$client->acs()->user()->get()` |
| 获取用户列表 | `$client->acs()->user()->get()` |

## Admin

### AdminDeptStat

| API Name | Call |
| --- | --- |
| 获取部门维度的用户活跃和功能使用数据 | `$client->admin()->adminDeptStat()->get()` |

### AdminUserStat

| API Name | Call |
| --- | --- |
| 获取用户维度的用户活跃和功能使用数据 | `$client->admin()->adminUserStat()->get()` |

### BadgeImage

| API Name | Call |
| --- | --- |
| 上传勋章图片 | `$client->admin()->badgeImage()->create()` |

### Badge

| API Name | Call |
| --- | --- |
| 修改勋章信息 | `$client->admin()->badge()->update()` |
| 创建勋章 | `$client->admin()->badge()->create()` |
| 创建授予名单 | `$client->admin()->badge()->createGrants()` |
| 删除授予名单 | `$client->admin()->badge()->deleteGrants()` |
| 获取勋章列表 | `$client->admin()->badge()->get()` |
| 获取勋章详情 | `$client->admin()->badge()->get()` |
| 获取授予名单列表 | `$client->admin()->badge()->getGrants()` |
| 获取授予名单详情 | `$client->admin()->badge()->getGrants()` |

### Password

| API Name | Call |
| --- | --- |
| 重置用户的企业邮箱密码 | `$client->admin()->password()->reset()` |

## Application

### User

| API Name | Call |
| --- | --- |
| 获取用户可用的应用 | `$client->application()->user()->getVisibleApps()` |

### App

| API Name | Call |
| --- | --- |
| 更新应用可用范围 | `$client->application()->app()->updateVisibility()` |
| 获取企业安装的应用 | `$client->application()->app()->getList()` |
| 获取应用在企业内的可用范围 | `$client->application()->app()->getVisibility()` |

### IsUserAdmin

| API Name | Call |
| --- | --- |
| 校验应用管理员 | `$client->application()->isUserAdmin()->get()` |

### AppRecommendRule

| API Name | Call |
| --- | --- |
| 获取当前设置的推荐规则列表 | `$client->application()->appRecommendRule()->get()` |

### Application

| API Name | Call |
| --- | --- |
| 更新应用分组信息 | `$client->application()->application()->patch()` |
| 更新应用反馈 | `$client->application()->application()->patchFeedbacks()` |
| 更新应用审核状态 | `$client->application()->application()->patchAppVersions()` |
| 查看待审核的应用列表 | `$client->application()->application()->getUnderauditlist()` |
| 获取应用使用概览 | `$client->application()->application()->createAppUsageOverview()` |
| 获取应用信息 | `$client->application()->application()->get()` |
| 获取应用反馈列表 | `$client->application()->application()->getFeedbacks()` |
| 获取应用版本信息 | `$client->application()->application()->getAppVersions()` |
| 获取应用版本列表 | `$client->application()->application()->getAppVersions()` |

## Approval

### Message

| API Name | Call |
| --- | --- |
| 发送审批 Bot 消息 | `$client->approval()->message()->send()` |
| 更新审批 Bot 消息 | `$client->approval()->message()->update()` |

### Instance

| API Name | Call |
| --- | --- |
| 创建审批实例 | `$client->approval()->instance()->create()` |
| 创建评论 | `$client->approval()->instance()->createComments()` |
| 删除评论 | `$client->approval()->instance()->deleteComments()` |
| 审批任务加签 | `$client->approval()->instance()->addSign()` |
| 抄送审批实例 | `$client->approval()->instance()->cc()` |
| 撤回审批实例 | `$client->approval()->instance()->cancel()` |
| 查询实例列表 | `$client->approval()->instance()->query()` |
| 查询抄送列表 | `$client->approval()->instance()->searchCc()` |
| 清空评论 | `$client->approval()->instance()->removeComments()` |
| 获取单个审批实例详情 | `$client->approval()->instance()->get()` |
| 获取评论 | `$client->approval()->instance()->getComments()` |
| 退回审批任务 | `$client->approval()->instance()->specifiedRollback()` |
| 预览审批流程 | `$client->approval()->instance()->preview()` |

### Subscription

| API Name | Call |
| --- | --- |
| 订阅审批事件 | `$client->approval()->subscription()->subscribe()` |

### Approval

| API Name | Call |
| --- | --- |
| 创建审批定义 | `$client->approval()->approval()->create()` |
| 取消订阅审批事件 | `$client->approval()->approval()->unsubscribe()` |
| 查看指定审批定义 | `$client->approval()->approval()->get()` |
| 查询审批定义列表 | `$client->approval()->approval()->get()` |

### ExternalApproval

| API Name | Call |
| --- | --- |
| 创建三方审批定义 | `$client->approval()->externalApproval()->create()` |

### ExternalInstance

| API Name | Call |
| --- | --- |
| 同步三方审批实例 | `$client->approval()->externalInstance()->create()` |
| 校验三方审批实例 | `$client->approval()->externalInstance()->check()` |

### ExternalTask

| API Name | Call |
| --- | --- |
| 获取三方审批任务状态 | `$client->approval()->externalTask()->get()` |

### Task

| API Name | Call |
| --- | --- |
| 同意审批任务 | `$client->approval()->task()->approve()` |
| 拒绝审批任务 | `$client->approval()->task()->reject()` |
| 查询任务列表 | `$client->approval()->task()->search()` |
| 查询用户的任务列表 | `$client->approval()->task()->query()` |
| 转交审批任务 | `$client->approval()->task()->transfer()` |
| 重新提交审批任务 | `$client->approval()->task()->resubmit()` |

## Attendance

### ApprovalInfo

| API Name | Call |
| --- | --- |
| 通知审批状态更新 | `$client->attendance()->approvalInfo()->process()` |

### File

| API Name | Call |
| --- | --- |
| 上传用户人脸识别照片 | `$client->attendance()->file()->upload()` |
| 下载用户人脸识别照片 | `$client->attendance()->file()->download()` |

### Group

| API Name | Call |
| --- | --- |
| 创建或修改班表 | `$client->attendance()->group()->batchCreateUserDailyShifts()` |
| 创建或修改考勤组 | `$client->attendance()->group()->create()` |
| 删除考勤组 | `$client->attendance()->group()->delete()` |
| 按 ID 查询考勤组 | `$client->attendance()->group()->get()` |
| 按名称查询考勤组 | `$client->attendance()->group()->search()` |
| 查询所有考勤组 | `$client->attendance()->group()->get()` |
| 查询班表信息 | `$client->attendance()->group()->createUserDailyShiftsQuery()` |

### Shift

| API Name | Call |
| --- | --- |
| 创建班次 | `$client->attendance()->shift()->create()` |
| 删除班次 | `$client->attendance()->shift()->delete()` |
| 按 ID 查询班次 | `$client->attendance()->shift()->get()` |
| 按名称查询班次 | `$client->attendance()->shift()->query()` |
| 查询所有班次 | `$client->attendance()->shift()->get()` |

### UserApproval

| API Name | Call |
| --- | --- |
| 写入审批结果 | `$client->attendance()->userApproval()->create()` |
| 获取用户审批通过数据 | `$client->attendance()->userApproval()->query()` |

### UserFlow

| API Name | Call |
| --- | --- |
| 导入打卡流水 | `$client->attendance()->userFlow()->batchCreate()` |
| 批量查询打卡流水 | `$client->attendance()->userFlow()->query()` |
| 查询打卡流水 | `$client->attendance()->userFlow()->get()` |

### UserSetting

| API Name | Call |
| --- | --- |
| 修改用户人脸识别信息 | `$client->attendance()->userSetting()->modify()` |
| 批量查询用户人脸识别信息 | `$client->attendance()->userSetting()->query()` |

### UserStatsData

| API Name | Call |
| --- | --- |
| 查询统计数据 | `$client->attendance()->userStatsData()->query()` |

### UserStatsField

| API Name | Call |
| --- | --- |
| 查询统计表头 | `$client->attendance()->userStatsField()->query()` |

### UserStatsView

| API Name | Call |
| --- | --- |
| 更新统计设置 | `$client->attendance()->userStatsView()->create()` |
| 查询统计设置 | `$client->attendance()->userStatsView()->query()` |

### UserTaskRemedy

| API Name | Call |
| --- | --- |
| 获取可补卡时间 | `$client->attendance()->userTaskRemedy()->queryUserAllowedRemedys()` |
| 获取补卡记录 | `$client->attendance()->userTaskRemedy()->query()` |
| 通知补卡审批发起 | `$client->attendance()->userTaskRemedy()->create()` |

### UserTask

| API Name | Call |
| --- | --- |
| 获取打卡结果 | `$client->attendance()->userTask()->query()` |

## Auth

### AppAccessToken

| API Name | Call |
| --- | --- |
| 商店应用获取 app_access_token | `$client->auth()->appAccessToken()->create()` |
| 自建应用获取 app_access_token | `$client->auth()->appAccessToken()->createInternal()` |

### AppTicket

| API Name | Call |
| --- | --- |
| 重新获取 app_ticket | `$client->auth()->appTicket()->resend()` |

### TenantAccessToken

| API Name | Call |
| --- | --- |
| 商店应用获取 tenant_access_token | `$client->auth()->tenantAccessToken()->create()` |
| 自建应用获取 tenant_access_token | `$client->auth()->tenantAccessToken()->createInternal()` |

## Authen

### AccessToken

| API Name | Call |
| --- | --- |
| 获取 user_access_token | `$client->authen()->accessToken()->get()` |

### RefreshAccessToken

| API Name | Call |
| --- | --- |
| 刷新 user_access_token | `$client->authen()->refreshAccessToken()->create()` |

### UserInfo

| API Name | Call |
| --- | --- |
| 获取登录用户信息 | `$client->authen()->userInfo()->get()` |

## Baike

### Classification

| API Name | Call |
| --- | --- |
| 获取百科分类 | `$client->baike()->classification()->get()` |

### Draft

| API Name | Call |
| --- | --- |
| 创建草稿 | `$client->baike()->draft()->create()` |
| 更新草稿 | `$client->baike()->draft()->update()` |

### Entity

| API Name | Call |
| --- | --- |
| 创建免审词条 | `$client->baike()->entity()->createEntities()` |
| 提取潜在的百科词条 | `$client->baike()->entity()->createEntitiesExtract()` |
| 更新免审词条 | `$client->baike()->entity()->updateEntities()` |
| 模糊搜索词条 | `$client->baike()->entity()->createEntitiesSearch()` |
| 精准搜索词条 | `$client->baike()->entity()->createEntitiesMatch()` |
| 获取词条列表 | `$client->baike()->entity()->getEntities()` |
| 获取词条详情 | `$client->baike()->entity()->getEntities()` |
| 词条高亮 | `$client->baike()->entity()->createEntitiesHighlight()` |

### File

| API Name | Call |
| --- | --- |
| 上传图片 | `$client->baike()->file()->upload()` |
| 下载图片 | `$client->baike()->file()->download()` |

## Bitable

### App

| API Name | Call |
| --- | --- |
| 列出仪表盘 | `$client->bitable()->app()->getDashboards()` |
| 列出协作者 | `$client->bitable()->app()->getRolesMembers()` |
| 列出字段 | `$client->bitable()->app()->getTablesFields()` |
| 列出数据表 | `$client->bitable()->app()->getTables()` |
| 列出自定义角色 | `$client->bitable()->app()->getRoles()` |
| 列出表单问题 | `$client->bitable()->app()->getTablesFormsFields()` |
| 列出视图 | `$client->bitable()->app()->getTablesViews()` |
| 列出记录 | `$client->bitable()->app()->getTablesRecords()` |
| 删除一个数据表 | `$client->bitable()->app()->deleteTables()` |
| 删除协作者 | `$client->bitable()->app()->deleteRolesMembers()` |
| 删除多个数据表 | `$client->bitable()->app()->batchDeleteTables()` |
| 删除多条记录 | `$client->bitable()->app()->batchDeleteTablesRecords()` |
| 删除字段 | `$client->bitable()->app()->deleteTablesFields()` |
| 删除自定义角色 | `$client->bitable()->app()->deleteRoles()` |
| 删除视图 | `$client->bitable()->app()->deleteTablesViews()` |
| 删除记录 | `$client->bitable()->app()->deleteTablesRecords()` |
| 复制仪表盘 | `$client->bitable()->app()->createDashboardsCopy()` |
| 批量删除协作者 | `$client->bitable()->app()->batchDeleteRolesMembers()` |
| 批量新增协作者 | `$client->bitable()->app()->batchCreateRolesMembers()` |
| 新增协作者 | `$client->bitable()->app()->createRolesMembers()` |
| 新增多个数据表 | `$client->bitable()->app()->batchCreateTables()` |
| 新增多条记录 | `$client->bitable()->app()->batchCreateTablesRecords()` |
| 新增字段 | `$client->bitable()->app()->createTablesFields()` |
| 新增数据表 | `$client->bitable()->app()->createTables()` |
| 新增自定义角色 | `$client->bitable()->app()->createRoles()` |
| 新增视图 | `$client->bitable()->app()->createTablesViews()` |
| 新增记录 | `$client->bitable()->app()->createTablesRecords()` |
| 更新多条记录 | `$client->bitable()->app()->batchUpdateTablesRecords()` |
| 更新多维表格元数据 | `$client->bitable()->app()->update()` |
| 更新字段 | `$client->bitable()->app()->updateTablesFields()` |
| 更新数据表 | `$client->bitable()->app()->patchTables()` |
| 更新自定义角色 | `$client->bitable()->app()->updateRoles()` |
| 更新表单元数据 | `$client->bitable()->app()->patchTablesForms()` |
| 更新表单问题 | `$client->bitable()->app()->patchTablesFormsFields()` |
| 更新视图 | `$client->bitable()->app()->patchTablesViews()` |
| 更新记录 | `$client->bitable()->app()->updateTablesRecords()` |
| 检索视图 | `$client->bitable()->app()->getTablesViews()` |
| 检索记录 | `$client->bitable()->app()->getTablesRecords()` |
| 获取多维表格元数据 | `$client->bitable()->app()->get()` |
| 获取表单元数据 | `$client->bitable()->app()->getTablesForms()` |

## Calendar

### Calendar

| API Name | Call |
| --- | --- |
| 创建共享日历 | `$client->calendar()->calendar()->create()` |
| 创建日程 | `$client->calendar()->calendar()->createEvents()` |
| 创建访问控制 | `$client->calendar()->calendar()->createAcls()` |
| 删除共享日历 | `$client->calendar()->calendar()->delete()` |
| 删除日程 | `$client->calendar()->calendar()->deleteEvents()` |
| 删除日程参与人 | `$client->calendar()->calendar()->batchDeleteEventsAttendees()` |
| 删除访问控制 | `$client->calendar()->calendar()->deleteAcls()` |
| 取消订阅日历 | `$client->calendar()->calendar()->unsubscribe()` |
| 取消订阅日历变更事件 | `$client->calendar()->calendar()->createUnsubscription()` |
| 取消订阅日历访问控制变更事件 | `$client->calendar()->calendar()->createAclsUnsubscription()` |
| 取消订阅日程变更事件 | `$client->calendar()->calendar()->createEventsUnsubscription()` |
| 搜索日历 | `$client->calendar()->calendar()->search()` |
| 搜索日程 | `$client->calendar()->calendar()->createEventsSearch()` |
| 更新日历 | `$client->calendar()->calendar()->patch()` |
| 更新日程 | `$client->calendar()->calendar()->patchEvents()` |
| 查询日历信息 | `$client->calendar()->calendar()->get()` |
| 查询日历列表 | `$client->calendar()->calendar()->get()` |
| 添加日程参与人 | `$client->calendar()->calendar()->createEventsAttendees()` |
| 获取主日历 | `$client->calendar()->calendar()->createPrimary()` |
| 获取日程 | `$client->calendar()->calendar()->getEvents()` |
| 获取日程列表 | `$client->calendar()->calendar()->getEvents()` |
| 获取日程参与人列表 | `$client->calendar()->calendar()->getEventsAttendees()` |
| 获取日程参与群成员列表 | `$client->calendar()->calendar()->getEventsAttendeesChatMembers()` |
| 获取访问控制列表 | `$client->calendar()->calendar()->getAcls()` |
| 订阅日历 | `$client->calendar()->calendar()->subscribe()` |
| 订阅日历变更事件 | `$client->calendar()->calendar()->createSubscription()` |
| 订阅日历访问控制变更事件 | `$client->calendar()->calendar()->createAclsSubscription()` |
| 订阅日程变更事件 | `$client->calendar()->calendar()->createEventsSubscription()` |

### ExchangeBinding

| API Name | Call |
| --- | --- |
| 将 Exchange 账户绑定到飞书账户 | `$client->calendar()->exchangeBinding()->create()` |
| 解除 Exchange 账户绑定 | `$client->calendar()->exchangeBinding()->get()` |

### Freebusy

| API Name | Call |
| --- | --- |
| 查询主日历忙闲信息 | `$client->calendar()->freebusy()->createList()` |

### Setting

| API Name | Call |
| --- | --- |
| 生成 CalDAV 配置 | `$client->calendar()->setting()->createGenerateCaldavConf()` |

### TimeoffEvent

| API Name | Call |
| --- | --- |
| 创建请假日程 | `$client->calendar()->timeoffEvent()->create()` |
| 删除请假日程 | `$client->calendar()->timeoffEvent()->delete()` |

## Contact

### User

| API Name | Call |
| --- | --- |
| 修改用户部分信息 | `$client->contact()->user()->patch()` |
| 创建用户 | `$client->contact()->user()->create()` |
| 删除用户 | `$client->contact()->user()->delete()` |
| 更新用户所有信息 | `$client->contact()->user()->update()` |
| 获取单个用户信息 | `$client->contact()->user()->get()` |
| 获取应用管理员管理范围 | `$client->contact()->user()->getAdminScope()` |
| 获取部门直属用户列表 | `$client->contact()->user()->findByDepartment()` |
| 通过手机号或邮箱获取用户 ID | `$client->contact()->user()->batchGetId()` |

### CustomAttr

| API Name | Call |
| --- | --- |
| 获取企业自定义用户字段 | `$client->contact()->customAttr()->get()` |

### Department

| API Name | Call |
| --- | --- |
| 修改部门部分信息 | `$client->contact()->department()->patch()` |
| 创建部门 | `$client->contact()->department()->create()` |
| 删除部门 | `$client->contact()->department()->delete()` |
| 搜索部门 | `$client->contact()->department()->search()` |
| 更新部门所有信息 | `$client->contact()->department()->update()` |
| 获取单个部门信息 | `$client->contact()->department()->get()` |
| 获取子部门列表 | `$client->contact()->department()->getChildren()` |
| 获取父部门信息 | `$client->contact()->department()->getParent()` |
| 部门群转为普通群 | `$client->contact()->department()->unbindDepartmentChat()` |

### EmployeeTypeEnum

| API Name | Call |
| --- | --- |
| 删除人员类型 | `$client->contact()->employeeTypeEnum()->delete()` |
| 新增人员类型 | `$client->contact()->employeeTypeEnum()->create()` |
| 更新人员类型 | `$client->contact()->employeeTypeEnum()->update()` |
| 查询人员类型 | `$client->contact()->employeeTypeEnum()->get()` |

### Group

| API Name | Call |
| --- | --- |
| 创建用户组 | `$client->contact()->group()->create()` |
| 删除用户组 | `$client->contact()->group()->delete()` |
| 批量添加用户组成员 | `$client->contact()->group()->batchAddMember()` |
| 批量移除用户组成员 | `$client->contact()->group()->batchRemoveMember()` |
| 更新用户组 | `$client->contact()->group()->patch()` |
| 查询指定用户组 | `$client->contact()->group()->get()` |
| 查询用户所属用户组 | `$client->contact()->group()->getMemberBelong()` |
| 查询用户组列表 | `$client->contact()->group()->getSimpleList()` |
| 查询用户组成员列表 | `$client->contact()->group()->getMemberSimpleList()` |
| 添加用户组成员 | `$client->contact()->group()->addMember()` |
| 移除用户组成员 | `$client->contact()->group()->removeMember()` |

### Scope

| API Name | Call |
| --- | --- |
| 通讯录权限范围变更 | `$client->contact()->scope()->get()` |

### Unit

| API Name | Call |
| --- | --- |
| 修改单位信息 | `$client->contact()->unit()->patch()` |
| 创建单位 | `$client->contact()->unit()->create()` |
| 删除单位 | `$client->contact()->unit()->delete()` |
| 建立部门与单位的绑定关系 | `$client->contact()->unit()->bindDepartment()` |
| 获取单位信息 | `$client->contact()->unit()->get()` |
| 获取单位列表 | `$client->contact()->unit()->get()` |
| 获取单位绑定的部门列表 | `$client->contact()->unit()->listDepartment()` |
| 解除部门与单位的绑定关系 | `$client->contact()->unit()->unbindDepartment()` |

## Corehr

### Leave

| API Name | Call |
| --- | --- |
| 批量查询员工请假记录 | `$client->corehr()->leave()->getLeaveRequestHistory()` |

## Doc

### Doctoken

| API Name | Call |
| --- | --- |
| 编辑文档内容 | `$client->doc()->doctoken()->batchUpdate()` |
| 获取文档中的电子表格的元数据 | `$client->doc()->doctoken()->getSheetMeta()` |
| 获取文档富文本内容 | `$client->doc()->doctoken()->getContent()` |
| 获取文档文本内容 | `$client->doc()->doctoken()->getRawContent()` |

### Create

| API Name | Call |
| --- | --- |
| 创建文档 | `$client->doc()->create()->create()` |

### Meta

| API Name | Call |
| --- | --- |
| 获取文档元信息 | `$client->doc()->meta()->get()` |

## Docx

### Document

| API Name | Call |
| --- | --- |
| 创建块 | `$client->docx()->document()->createBlocksChildren()` |
| 创建文档 | `$client->docx()->document()->create()` |
| 删除块 | `$client->docx()->document()->deleteBlocksChildrenBatchDelete()` |
| 批量更新块 | `$client->docx()->document()->patchBlocksBatchUpdate()` |
| 更新块 | `$client->docx()->document()->patchBlocks()` |
| 获取块 | `$client->docx()->document()->getBlocks()` |
| 获取所有子块 | `$client->docx()->document()->getBlocksChildren()` |
| 获取文档基本信息 | `$client->docx()->document()->get()` |
| 获取文档所有块 | `$client->docx()->document()->getBlocks()` |
| 获取文档纯文本内容 | `$client->docx()->document()->getRawContent()` |

## Drive

### File

| API Name | Call |
| --- | --- |
| 上传文件 | `$client->drive()->file()->uploadAll()` |
| 下载文件 | `$client->drive()->file()->download()` |
| 分片上传文件（上传分片） | `$client->drive()->file()->uploadPart()` |
| 分片上传文件（完成上传） | `$client->drive()->file()->uploadFinish()` |
| 分片上传文件（预上传） | `$client->drive()->file()->uploadPrepare()` |
| 分页获取文档评论 | `$client->drive()->file()->getComments()` |
| 创建文档版本 | `$client->drive()->file()->createVersions()` |
| 创建订阅 | `$client->drive()->file()->createSubscriptions()` |
| 删除回复 | `$client->drive()->file()->deleteCommentsReplies()` |
| 删除文件 | `$client->drive()->file()->delete()` |
| 删除文档版本 | `$client->drive()->file()->deleteVersions()` |
| 复制文件 | `$client->drive()->file()->copy()` |
| 新建在线文档 | `$client->drive()->file()->createExplorerV2File()` |
| 更新回复 | `$client->drive()->file()->updateCommentsReplies()` |
| 更新订阅状态 | `$client->drive()->file()->patchSubscriptions()` |
| 查询异步任务状态 | `$client->drive()->file()->getTaskCheck()` |
| 添加评论 | `$client->drive()->file()->createComments()` |
| 移动文件 | `$client->drive()->file()->move()` |
| 获取文件夹下的清单 | `$client->drive()->file()->get()` |
| 获取文件统计信息 | `$client->drive()->file()->getStatistics()` |
| 获取文档版本 | `$client->drive()->file()->getVersions()` |
| 获取文档版本列表 | `$client->drive()->file()->getVersions()` |
| 获取订阅状态 | `$client->drive()->file()->getSubscriptions()` |
| 获取评论 | `$client->drive()->file()->getComments()` |
| 解决/恢复 评论 | `$client->drive()->file()->patchComments()` |
| 订阅云文档事件 | `$client->drive()->file()->subscribe()` |

### Folder

| API Name | Call |
| --- | --- |
| 获取文件夹元信息 | `$client->drive()->folder()->getExplorerV2FolderMeta()` |

### RootFolder

| API Name | Call |
| --- | --- |
| 获取我的空间（root folder）元信息 | `$client->drive()->rootFolder()->getExplorerV2RootFolderMeta()` |

### Permission

| API Name | Call |
| --- | --- |
| 判断协作者是否有某权限 | `$client->drive()->permission()->createMemberPermitted()` |
| 判断当前用户是否有某权限 | `$client->drive()->permission()->getMembersAuth()` |
| 增加协作者权限 | `$client->drive()->permission()->createMembers()` |
| 更新云文档权限设置 | `$client->drive()->permission()->patchPublic()` |
| 获取云文档权限设置 | `$client->drive()->permission()->getPublic()` |
| 获取协作者列表 | `$client->drive()->permission()->createMemberList()` |
| 获取协作者列表（新版本） | `$client->drive()->permission()->getMembers()` |
| 转移所有者 | `$client->drive()->permission()->createMembersTransferOwner()` |
| 转移拥有者 | `$client->drive()->permission()->createMemberTransfer()` |

### Public

| API Name | Call |
| --- | --- |
| 获取文档公共设置V2 | `$client->drive()->public()->createPermissionV2Public()` |

### ExportTask

| API Name | Call |
| --- | --- |
| 下载导出文件 | `$client->drive()->exportTask()->getFileDownload()` |
| 创建导出任务 | `$client->drive()->exportTask()->create()` |
| 查询导出任务结果 | `$client->drive()->exportTask()->get()` |

### ImportTask

| API Name | Call |
| --- | --- |
| 创建导入任务 | `$client->drive()->importTask()->create()` |
| 查询导入结果 | `$client->drive()->importTask()->get()` |

### Media

| API Name | Call |
| --- | --- |
| 上传素材 | `$client->drive()->media()->uploadAll()` |
| 下载素材 | `$client->drive()->media()->download()` |
| 分片上传素材（上传分片） | `$client->drive()->media()->uploadPart()` |
| 分片上传素材（完成上传） | `$client->drive()->media()->uploadFinish()` |
| 分片上传素材（预上传） | `$client->drive()->media()->uploadPrepare()` |
| 获取素材临时下载链接 | `$client->drive()->media()->batchGetTmpDownloadUrl()` |

### Meta

| API Name | Call |
| --- | --- |
| 获取文档元数据 | `$client->drive()->meta()->createBatchQuery()` |

### PermissionMember

| API Name | Call |
| --- | --- |
| 更新协作者权限 | `$client->drive()->permissionMember()->createPermissionsMembers()` |

## Ehr

### Attachment

| API Name | Call |
| --- | --- |
| 下载人员的附件 | `$client->ehr()->attachment()->get()` |

### Employee

| API Name | Call |
| --- | --- |
| 批量获取员工花名册信息 | `$client->ehr()->employee()->get()` |

## Ephemeral

### Delete

| API Name | Call |
| --- | --- |
| 删除仅特定人可见的消息卡片 | `$client->ephemeral()->delete()->delete()` |

### Send

| API Name | Call |
| --- | --- |
| 发送仅特定人可见的消息卡片 | `$client->ephemeral()->send()->create()` |

## Event

### OutboundIp

| API Name | Call |
| --- | --- |
| 获取事件出口 IP | `$client->event()->outboundIp()->get()` |

## FaceVerify

### CropFaceImage

| API Name | Call |
| --- | --- |
| 裁剪人脸图片 | `$client->faceVerify()->cropFaceImage()->create()` |

### QueryAuthResult

| API Name | Call |
| --- | --- |
| 查询人脸认证结果 | `$client->faceVerify()->queryAuthResult()->get()` |

### UploadFaceImage

| API Name | Call |
| --- | --- |
| 上传人脸基准图片 | `$client->faceVerify()->uploadFaceImage()->create()` |

## Helpdesk

### AgentEmail

| API Name | Call |
| --- | --- |
| 获取客服邮箱 | `$client->helpdesk()->agentEmail()->get()` |

### AgentSchedule

| API Name | Call |
| --- | --- |
| 创建客服工作日程 | `$client->helpdesk()->agentSchedule()->create()` |
| 查询全部客服工作日程 | `$client->helpdesk()->agentSchedule()->get()` |

### AgentSkillRule

| API Name | Call |
| --- | --- |
| 获取客服技能列表 | `$client->helpdesk()->agentSkillRule()->get()` |

### AgentSkill

| API Name | Call |
| --- | --- |
| 创建客服技能 | `$client->helpdesk()->agentSkill()->create()` |
| 删除客服技能 | `$client->helpdesk()->agentSkill()->delete()` |
| 更新客服技能 | `$client->helpdesk()->agentSkill()->patch()` |
| 查询全部客服技能 | `$client->helpdesk()->agentSkill()->get()` |
| 查询指定客服技能 | `$client->helpdesk()->agentSkill()->get()` |

### Agent

| API Name | Call |
| --- | --- |
| 删除客服工作日程 | `$client->helpdesk()->agent()->deleteSchedules()` |
| 更新客服信息 | `$client->helpdesk()->agent()->patch()` |
| 更新客服工作日程 | `$client->helpdesk()->agent()->patchSchedules()` |
| 查询指定客服工作日程 | `$client->helpdesk()->agent()->getSchedules()` |

### Category

| API Name | Call |
| --- | --- |
| 创建知识库分类 | `$client->helpdesk()->category()->createCategories()` |
| 删除知识库分类详情 | `$client->helpdesk()->category()->deleteCategories()` |
| 更新知识库分类详情 | `$client->helpdesk()->category()->patchCategories()` |
| 获取全部知识库分类 | `$client->helpdesk()->category()->getCategories()` |
| 获取知识库分类 | `$client->helpdesk()->category()->getCategories()` |

### CustomizedField

| API Name | Call |
| --- | --- |
| 获取服务台自定义字段 | `$client->helpdesk()->customizedField()->get()` |

### Event

| API Name | Call |
| --- | --- |
| 取消订阅服务台事件 | `$client->helpdesk()->event()->unsubscribe()` |
| 订阅服务台事件 | `$client->helpdesk()->event()->subscribe()` |

### Faq

| API Name | Call |
| --- | --- |
| 修改知识库 | `$client->helpdesk()->faq()->patch()` |
| 创建知识库 | `$client->helpdesk()->faq()->create()` |
| 删除知识库 | `$client->helpdesk()->faq()->delete()` |
| 搜索知识库 | `$client->helpdesk()->faq()->search()` |
| 获取全部知识库详情 | `$client->helpdesk()->faq()->get()` |
| 获取知识库图像 | `$client->helpdesk()->faq()->getImage()` |
| 获取知识库详情 | `$client->helpdesk()->faq()->get()` |

### Message

| API Name | Call |
| --- | --- |
| 服务台机器人向工单绑定的群内发送消息 | `$client->helpdesk()->message()->create()` |

### Notification

| API Name | Call |
| --- | --- |
| 创建推送 | `$client->helpdesk()->notification()->create()` |
| 取消审核 | `$client->helpdesk()->notification()->cancelApprove()` |
| 取消推送 | `$client->helpdesk()->notification()->cancelSend()` |
| 执行推送 | `$client->helpdesk()->notification()->createExecuteSend()` |
| 提交审核 | `$client->helpdesk()->notification()->createSubmitApprove()` |
| 更新推送 | `$client->helpdesk()->notification()->patch()` |
| 查询推送 | `$client->helpdesk()->notification()->get()` |
| 预览推送 | `$client->helpdesk()->notification()->preview()` |

### StartService

| API Name | Call |
| --- | --- |
| 创建服务台对话 | `$client->helpdesk()->startService()->create()` |

### TicketCustomizedField

| API Name | Call |
| --- | --- |
| 创建工单自定义字段 | `$client->helpdesk()->ticketCustomizedField()->create()` |
| 删除工单自定义字段 | `$client->helpdesk()->ticketCustomizedField()->delete()` |
| 更新工单自定义字段 | `$client->helpdesk()->ticketCustomizedField()->patch()` |
| 获取全部工单自定义字段 | `$client->helpdesk()->ticketCustomizedField()->get()` |
| 获取指定工单自定义字段 | `$client->helpdesk()->ticketCustomizedField()->get()` |

### TicketImage

| API Name | Call |
| --- | --- |
| 获取服务台工单内消息图像 | `$client->helpdesk()->ticketImage()->get()` |

### Ticket

| API Name | Call |
| --- | --- |
| 发送工单消息 | `$client->helpdesk()->ticket()->createMessages()` |
| 回复用户提问结果至工单 | `$client->helpdesk()->ticket()->answerUserQuery()` |
| 更新工单详情 | `$client->helpdesk()->ticket()->update()` |
| 查询全部工单详情 | `$client->helpdesk()->ticket()->get()` |
| 查询指定工单详情 | `$client->helpdesk()->ticket()->get()` |
| 获取工单消息详情 | `$client->helpdesk()->ticket()->getMessages()` |

## Hire

### Application

| API Name | Call |
| --- | --- |
| 创建投递 | `$client->hire()->application()->create()` |
| 操作候选人入职 | `$client->hire()->application()->transferOnboard()` |
| 终止投递 | `$client->hire()->application()->createTerminate()` |
| 获取 Offer 信息 | `$client->hire()->application()->getOffer()` |
| 获取投递信息 | `$client->hire()->application()->get()` |
| 获取投递列表 | `$client->hire()->application()->get()` |

### Attachment

| API Name | Call |
| --- | --- |
| 获取附件信息 | `$client->hire()->attachment()->get()` |
| 获取附件预览信息 | `$client->hire()->attachment()->preview()` |

### EhrImportTask

| API Name | Call |
| --- | --- |
| 更新 e-HR 导入任务结果 | `$client->hire()->ehrImportTask()->patch()` |

### Employee

| API Name | Call |
| --- | --- |
| 更新入职状态 | `$client->hire()->employee()->patch()` |
| 通过员工 ID 获取入职信息 | `$client->hire()->employee()->get()` |
| 通过投递 ID 获取入职信息 | `$client->hire()->employee()->getByApplication()` |

### JobProcess

| API Name | Call |
| --- | --- |
| 获取招聘流程信息 | `$client->hire()->jobProcess()->getJobProcesses()` |

### Job

| API Name | Call |
| --- | --- |
| 新建职位 | `$client->hire()->job()->createCombinedCreate()` |
| 更新职位 | `$client->hire()->job()->updateCombined()` |
| 更新职位设置 | `$client->hire()->job()->updateConfig()` |
| 获取职位上的招聘人员信息 | `$client->hire()->job()->getManagers()` |
| 获取职位信息 | `$client->hire()->job()->get()` |
| 获取职位设置 | `$client->hire()->job()->getConfig()` |

### Note

| API Name | Call |
| --- | --- |
| 创建备注 | `$client->hire()->note()->create()` |
| 更新备注 | `$client->hire()->note()->patch()` |
| 获取备注 | `$client->hire()->note()->get()` |
| 获取备注列表 | `$client->hire()->note()->get()` |

### Referral

| API Name | Call |
| --- | --- |
| 获取内推信息 | `$client->hire()->referral()->getByApplication()` |

### ResumeSource

| API Name | Call |
| --- | --- |
| 获取简历来源列表 | `$client->hire()->resumeSource()->get()` |

### Talent

| API Name | Call |
| --- | --- |
| 获取人才信息 | `$client->hire()->talent()->get()` |
| 通过手机号或邮箱获取人才 ID | `$client->hire()->talent()->batchGetId()` |

## HumanAuthentication

### Identity

| API Name | Call |
| --- | --- |
| 录入身份信息 | `$client->humanAuthentication()->identity()->createIdentities()` |

## Im

### BatchMessage

| API Name | Call |
| --- | --- |
| 批量撤回消息 | `$client->im()->batchMessage()->delete()` |
| 查询批量消息推送和阅读人数 | `$client->im()->batchMessage()->getReadUser()` |
| 查询批量消息整体进度 | `$client->im()->batchMessage()->getProgress()` |

### Chat

| API Name | Call |
| --- | --- |
| 会话标签页排序 | `$client->im()->chat()->createChatTabsSortTabs()` |
| 修改群菜单元信息 | `$client->im()->chat()->patchMenuItems()` |
| 创建群 | `$client->im()->chat()->create()` |
| 删除会话标签页 | `$client->im()->chat()->deleteChatTabsDeleteTabs()` |
| 删除群管理员 | `$client->im()->chat()->getManagersDeleteManagers()` |
| 删除群菜单。 | `$client->im()->chat()->deleteMenuTree()` |
| 判断用户或机器人是否在群里 | `$client->im()->chat()->getMembersIsInChat()` |
| 将用户或机器人拉入群聊 | `$client->im()->chat()->createMembers()` |
| 将用户或机器人移出群聊 | `$client->im()->chat()->deleteMembers()` |
| 拉取会话标签页 | `$client->im()->chat()->getChatTabsListTabs()` |
| 指定群管理员 | `$client->im()->chat()->createManagersAddManagers()` |
| 排序群菜单 | `$client->im()->chat()->createMenuTreeSort()` |
| 搜索对用户或机器人可见的群列表 | `$client->im()->chat()->search()` |
| 撤销群置顶 | `$client->im()->chat()->createTopNoticeDeleteTopNotice()` |
| 更新会话标签页 | `$client->im()->chat()->createChatTabsUpdateTabs()` |
| 更新群信息 | `$client->im()->chat()->update()` |
| 更新群公告信息 | `$client->im()->chat()->patchAnnouncement()` |
| 更新群发言权限 | `$client->im()->chat()->updateModeration()` |
| 更新群置顶 | `$client->im()->chat()->createTopNoticePutTopNotice()` |
| 添加会话标签页 | `$client->im()->chat()->createChatTabs()` |
| 添加群菜单 | `$client->im()->chat()->createMenuTree()` |
| 用户或机器人主动加入群聊 | `$client->im()->chat()->patchMembersMeJoin()` |
| 获取用户或机器人所在的群列表 | `$client->im()->chat()->get()` |
| 获取群信息 | `$client->im()->chat()->get()` |
| 获取群公告信息 | `$client->im()->chat()->getAnnouncement()` |
| 获取群分享链接 | `$client->im()->chat()->createLink()` |
| 获取群成员列表 | `$client->im()->chat()->getMembers()` |
| 获取群成员发言权限 | `$client->im()->chat()->getModeration()` |
| 获取群菜单 | `$client->im()->chat()->getMenuTree()` |
| 解散群 | `$client->im()->chat()->delete()` |

### File

| API Name | Call |
| --- | --- |
| 上传文件 | `$client->im()->file()->create()` |
| 下载文件 | `$client->im()->file()->get()` |

### Image

| API Name | Call |
| --- | --- |
| 上传图片 | `$client->im()->image()->create()` |
| 下载图片 | `$client->im()->image()->get()` |

### Message

| API Name | Call |
| --- | --- |
| 删除消息表情回复 | `$client->im()->message()->deleteReactions()` |
| 发送应用内加急 | `$client->im()->message()->patchUrgentApp()` |
| 发送消息 | `$client->im()->message()->create()` |
| 发送电话加急 | `$client->im()->message()->patchUrgentPhone()` |
| 发送短信加急 | `$client->im()->message()->patchUrgentSms()` |
| 回复消息 | `$client->im()->message()->reply()` |
| 撤回消息 | `$client->im()->message()->delete()` |
| 更新应用发送的消息卡片 | `$client->im()->message()->patch()` |
| 查询消息已读信息 | `$client->im()->message()->getReadUsers()` |
| 添加消息表情回复 | `$client->im()->message()->createReactions()` |
| 获取会话历史消息 | `$client->im()->message()->get()` |
| 获取指定消息的内容 | `$client->im()->message()->get()` |
| 获取消息中的资源文件 | `$client->im()->message()->getResources()` |
| 获取消息表情回复 | `$client->im()->message()->getReactions()` |

### Pin

| API Name | Call |
| --- | --- |
| Pin 消息 | `$client->im()->pin()->create()` |
| 移除 Pin 消息 | `$client->im()->pin()->delete()` |
| 获取群内 Pin 消息 | `$client->im()->pin()->get()` |

## Interactive

### Card

| API Name | Call |
| --- | --- |
| 延时更新消息卡片 | `$client->interactive()->card()->update()` |

## Mail

### Mailgroup

| API Name | Call |
| --- | --- |
| 修改邮件组全部信息 | `$client->mail()->mailgroup()->update()` |
| 修改邮件组部分信息 | `$client->mail()->mailgroup()->patch()` |
| 创建邮件组 | `$client->mail()->mailgroup()->create()` |
| 创建邮件组别名 | `$client->mail()->mailgroup()->createAliases()` |
| 创建邮件组成员 | `$client->mail()->mailgroup()->createMembers()` |
| 创建邮件组权限成员 | `$client->mail()->mailgroup()->createPermissionMembers()` |
| 删除邮件组 | `$client->mail()->mailgroup()->delete()` |
| 删除邮件组别名 | `$client->mail()->mailgroup()->deleteAliases()` |
| 删除邮件组成员 | `$client->mail()->mailgroup()->deleteMembers()` |
| 删除邮件组权限成员 | `$client->mail()->mailgroup()->deletePermissionMembers()` |
| 批量创建邮件组成员 | `$client->mail()->mailgroup()->batchCreateMembers()` |
| 批量创建邮件组权限成员 | `$client->mail()->mailgroup()->batchCreatePermissionMembers()` |
| 批量删除邮件组成员 | `$client->mail()->mailgroup()->deleteMembersBatchDelete()` |
| 批量删除邮件组权限成员 | `$client->mail()->mailgroup()->deletePermissionMembersBatchDelete()` |
| 批量获取邮件组 | `$client->mail()->mailgroup()->get()` |
| 批量获取邮件组权限成员 | `$client->mail()->mailgroup()->getPermissionMembers()` |
| 查询指定邮件组 | `$client->mail()->mailgroup()->get()` |
| 查询指定邮件组成员 | `$client->mail()->mailgroup()->getMembers()` |
| 获取所有邮件组成员 | `$client->mail()->mailgroup()->getMembers()` |
| 获取邮件组所有别名 | `$client->mail()->mailgroup()->getAliases()` |
| 获取邮件组权限成员 | `$client->mail()->mailgroup()->getPermissionMembers()` |

### PublicMailboxe

| API Name | Call |
| --- | --- |
| 修改公共邮箱 | `$client->mail()->publicMailboxe()->patch()` |
| 创建公共邮箱 | `$client->mail()->publicMailboxe()->create()` |
| 创建公共邮箱别名 | `$client->mail()->publicMailboxe()->createAliases()` |
| 删除公共邮箱 | `$client->mail()->publicMailboxe()->delete()` |
| 删除公共邮箱别名 | `$client->mail()->publicMailboxe()->deleteAliases()` |
| 删除公共邮箱成员 | `$client->mail()->publicMailboxe()->deleteMembers()` |
| 删除公共邮箱所有成员 | `$client->mail()->publicMailboxe()->createMembersClear()` |
| 批量删除公共邮箱成员 | `$client->mail()->publicMailboxe()->deleteMembersBatchDelete()` |
| 批量添加公共邮箱成员 | `$client->mail()->publicMailboxe()->batchCreateMembers()` |
| 查询公共邮箱的所有别名 | `$client->mail()->publicMailboxe()->getAliases()` |
| 查询所有公共邮箱 | `$client->mail()->publicMailboxe()->get()` |
| 查询所有公共邮箱成员信息 | `$client->mail()->publicMailboxe()->getMembers()` |
| 查询指定公共邮箱 | `$client->mail()->publicMailboxe()->get()` |
| 添加公共邮箱成员 | `$client->mail()->publicMailboxe()->createMembers()` |
| 获取公共邮箱成员信息 | `$client->mail()->publicMailboxe()->getMembers()` |

### UserMailboxe

| API Name | Call |
| --- | --- |
| 从回收站删除用户邮箱地址 | `$client->mail()->userMailboxe()->delete()` |
| 创建用户邮箱别名 | `$client->mail()->userMailboxe()->createAliases()` |
| 删除用户邮箱别名 | `$client->mail()->userMailboxe()->deleteAliases()` |
| 获取用户邮箱所有别名 | `$client->mail()->userMailboxe()->getAliases()` |

### User

| API Name | Call |
| --- | --- |
| 查询邮箱地址状态 | `$client->mail()->user()->query()` |

## MeetingRoom

### Freebusy

| API Name | Call |
| --- | --- |
| 查询会议室忙闲 | `$client->meetingRoom()->freebusy()->batchGet()` |

### Instance

| API Name | Call |
| --- | --- |
| 回复会议室日程实例 | `$client->meetingRoom()->instance()->reply()` |

### Summary

| API Name | Call |
| --- | --- |
| 查询会议室日程主题和会议详情 | `$client->meetingRoom()->summary()->batchGet()` |

## Message

### BatchSend

| API Name | Call |
| --- | --- |
| 批量发送消息 | `$client->message()->batchSend()->create()` |

## Minutes

### Minute

| API Name | Call |
| --- | --- |
| 获取妙记信息 | `$client->minutes()->minute()->get()` |
| 获取妙记统计数据 | `$client->minutes()->minute()->getStatistics()` |

## Okr

### Image

| API Name | Call |
| --- | --- |
| 上传进展记录图片 | `$client->okr()->image()->upload()` |

### MetricSource

| API Name | Call |
| --- | --- |
| 批量更新指标项 | `$client->okr()->metricSource()->patchTablesItemsBatchUpdate()` |
| 更新指标项 | `$client->okr()->metricSource()->patchTablesItems()` |
| 获取指标库 | `$client->okr()->metricSource()->get()` |
| 获取指标表 | `$client->okr()->metricSource()->getTables()` |
| 获取指标项 | `$client->okr()->metricSource()->getTablesItems()` |

### Okr

| API Name | Call |
| --- | --- |
| 批量获取OKR | `$client->okr()->okr()->batchGet()` |

### Period

| API Name | Call |
| --- | --- |
| 获取OKR周期列表 | `$client->okr()->period()->get()` |

### ProgressRecord

| API Name | Call |
| --- | --- |
| 创建 OKR 进展记录 | `$client->okr()->progressRecord()->create()` |
| 删除 OKR 进展记录 | `$client->okr()->progressRecord()->delete()` |
| 更新 OKR 进展记录 | `$client->okr()->progressRecord()->update()` |
| 获取 OKR 进展记录 | `$client->okr()->progressRecord()->get()` |

### User

| API Name | Call |
| --- | --- |
| 获取用户的 OKR 列表 | `$client->okr()->user()->getOkrs()` |

## OpticalCharRecognition

### Image

| API Name | Call |
| --- | --- |
| 识别图片中的文字 | `$client->opticalCharRecognition()->image()->createBasicRecognize()` |

## Passport

### Session

| API Name | Call |
| --- | --- |
| 批量获取脱敏的用户登录信息 | `$client->passport()->session()->query()` |
| 退出登录 | `$client->passport()->session()->logout()` |

## Pay

### Order

| API Name | Call |
| --- | --- |
| 查询租户购买的付费方案 | `$client->pay()->order()->getList()` |
| 查询订单详情 | `$client->pay()->order()->get()` |

### PaidScope

| API Name | Call |
| --- | --- |
| 查询用户是否在应用开通范围 | `$client->pay()->paidScope()->checkUser()` |

## PersonalSettings

### SystemStatus

| API Name | Call |
| --- | --- |
| 修改系统状态 | `$client->personalSettings()->systemStatus()->patchSystemStatuses()` |
| 创建系统状态 | `$client->personalSettings()->systemStatus()->createSystemStatuses()` |
| 删除系统状态 | `$client->personalSettings()->systemStatus()->deleteSystemStatuses()` |
| 批量关闭系统状态 | `$client->personalSettings()->systemStatus()->createSystemStatusesBatchClose()` |
| 批量开启系统状态 | `$client->personalSettings()->systemStatus()->createSystemStatusesBatchOpen()` |
| 获取系统状态 | `$client->personalSettings()->systemStatus()->getSystemStatuses()` |

## Search

### DataSource

| API Name | Call |
| --- | --- |
| 为指定数据项创建索引 | `$client->search()->dataSource()->createItems()` |
| 修改数据源 | `$client->search()->dataSource()->patch()` |
| 创建数据源 | `$client->search()->dataSource()->create()` |
| 删除数据源 | `$client->search()->dataSource()->delete()` |
| 删除数据项 | `$client->search()->dataSource()->deleteItems()` |
| 批量为数据项创建索引 | `$client->search()->dataSource()->batchCreateItems()` |
| 批量获取所有的数据源 | `$client->search()->dataSource()->get()` |
| 获取数据源 | `$client->search()->dataSource()->get()` |
| 获取数据项 | `$client->search()->dataSource()->getItems()` |

### Schema

| API Name | Call |
| --- | --- |
| 修改数据范式 | `$client->search()->schema()->patch()` |
| 创建数据范式 | `$client->search()->schema()->create()` |
| 删除数据范式 | `$client->search()->schema()->delete()` |
| 获取数据范式 | `$client->search()->schema()->get()` |

## Sheets

### Spreadsheet

| API Name | Call |
| --- | --- |
| 修改保护范围 | `$client->sheets()->spreadsheet()->batchUpdateProtectedRange()` |
| 修改电子表格属性 | `$client->sheets()->spreadsheet()->patch()` |
| 写入图片 | `$client->sheets()->spreadsheet()->createValuesImage()` |
| 创建条件格式 | `$client->sheets()->spreadsheet()->batchCreateConditionFormats()` |
| 创建浮动图片 | `$client->sheets()->spreadsheet()->createSheetsFloatImages()` |
| 创建筛选 | `$client->sheets()->spreadsheet()->createSheetsFilter()` |
| 创建筛选条件 | `$client->sheets()->spreadsheet()->createSheetsFilterViewsConditions()` |
| 创建筛选视图 | `$client->sheets()->spreadsheet()->createSheetsFilterViews()` |
| 创建表格 | `$client->sheets()->spreadsheet()->create()` |
| 删除下拉列表设置 | `$client->sheets()->spreadsheet()->deleteDataValidation()` |
| 删除保护范围 | `$client->sheets()->spreadsheet()->deleteProtectedRangeBatchDel()` |
| 删除条件格式 | `$client->sheets()->spreadsheet()->deleteConditionFormatsBatchDelete()` |
| 删除浮动图片 | `$client->sheets()->spreadsheet()->deleteSheetsFloatImages()` |
| 删除筛选 | `$client->sheets()->spreadsheet()->deleteSheetsFilter()` |
| 删除筛选条件 | `$client->sheets()->spreadsheet()->deleteSheetsFilterViewsConditions()` |
| 删除筛选视图 | `$client->sheets()->spreadsheet()->deleteSheetsFilterViews()` |
| 删除行列 | `$client->sheets()->spreadsheet()->deleteDimensionRange()` |
| 合并单元格 | `$client->sheets()->spreadsheet()->createMergeCells()` |
| 向单个范围写入数据 | `$client->sheets()->spreadsheet()->updateValues()` |
| 向多个范围写入数据 | `$client->sheets()->spreadsheet()->batchUpdateValues()` |
| 增加保护范围 | `$client->sheets()->spreadsheet()->createProtectedDimension()` |
| 增加行列 | `$client->sheets()->spreadsheet()->createDimensionRange()` |
| 批量设置单元格样式 | `$client->sheets()->spreadsheet()->updateStylesBatchUpdate()` |
| 拆分单元格 | `$client->sheets()->spreadsheet()->createUnmergeCells()` |
| 插入数据 | `$client->sheets()->spreadsheet()->createValuesPrepend()` |
| 插入行列 | `$client->sheets()->spreadsheet()->createInsertDimensionRange()` |
| 操作工作表 | `$client->sheets()->spreadsheet()->batchUpdateSheets()` |
| 更新下拉列表设置 | `$client->sheets()->spreadsheet()->updateDataValidation()` |
| 更新条件格式 | `$client->sheets()->spreadsheet()->batchUpdateConditionFormats()` |
| 更新筛选 | `$client->sheets()->spreadsheet()->updateSheetsFilter()` |
| 更新筛选条件 | `$client->sheets()->spreadsheet()->updateSheetsFilterViewsConditions()` |
| 更新筛选视图 | `$client->sheets()->spreadsheet()->patchSheetsFilterViews()` |
| 更新行列 | `$client->sheets()->spreadsheet()->updateDimensionRange()` |
| 更新表格属性 | `$client->sheets()->spreadsheet()->updateProperties()` |
| 替换单元格 | `$client->sheets()->spreadsheet()->createSheetsReplace()` |
| 查找单元格 | `$client->sheets()->spreadsheet()->createSheetsFind()` |
| 查询下拉列表设置 | `$client->sheets()->spreadsheet()->getDataValidation()` |
| 查询工作表 | `$client->sheets()->spreadsheet()->getSheets()` |
| 查询浮动图片 | `$client->sheets()->spreadsheet()->getSheetsFloatImagesQuery()` |
| 查询筛选条件 | `$client->sheets()->spreadsheet()->getSheetsFilterViewsConditionsQuery()` |
| 查询筛选视图 | `$client->sheets()->spreadsheet()->getSheetsFilterViewsQuery()` |
| 移动行列 | `$client->sheets()->spreadsheet()->createSheetsMoveDimension()` |
| 获取保护范围 | `$client->sheets()->spreadsheet()->getProtectedRangeBatch()` |
| 获取工作表 | `$client->sheets()->spreadsheet()->getSheetsQuery()` |
| 获取条件格式 | `$client->sheets()->spreadsheet()->getConditionFormats()` |
| 获取浮动图片 | `$client->sheets()->spreadsheet()->getSheetsFloatImages()` |
| 获取电子表格信息 | `$client->sheets()->spreadsheet()->get()` |
| 获取筛选 | `$client->sheets()->spreadsheet()->getSheetsFilter()` |
| 获取筛选条件 | `$client->sheets()->spreadsheet()->getSheetsFilterViewsConditions()` |
| 获取筛选视图 | `$client->sheets()->spreadsheet()->getSheetsFilterViews()` |
| 获取表格元数据 | `$client->sheets()->spreadsheet()->getMetainfo()` |
| 设置下拉列表 | `$client->sheets()->spreadsheet()->createDataValidation()` |
| 设置单元格样式 | `$client->sheets()->spreadsheet()->updateStyle()` |
| 读取单个范围 | `$client->sheets()->spreadsheet()->getValues()` |
| 读取多个范围 | `$client->sheets()->spreadsheet()->getValuesBatch()` |
| 追加数据 | `$client->sheets()->spreadsheet()->createValuesAppend()` |

## SpeechToText

### Speech

| API Name | Call |
| --- | --- |
| 识别流式语音 (ASR) | `$client->speechToText()->speech()->createStreamRecognize()` |
| 识别语音文件 (ASR) | `$client->speechToText()->speech()->createFileRecognize()` |

## Suite

### DocsApi

| API Name | Call |
| --- | --- |
| 文档搜素 | `$client->suite()->docsApi()->searchObject()` |

## Task

### Task

| API Name | Call |
| --- | --- |
| 创建评论 | `$client->task()->task()->createComments()` |
| 删除任务 | `$client->task()->task()->delete()` |
| 删除指定关注人 | `$client->task()->task()->deleteFollowers()` |
| 删除指定执行者 | `$client->task()->task()->deleteCollaborators()` |
| 删除提醒时间 | `$client->task()->task()->deleteReminders()` |
| 删除评论 | `$client->task()->task()->deleteComments()` |
| 取消完成任务 | `$client->task()->task()->uncomplete()` |
| 完成任务 | `$client->task()->task()->complete()` |
| 批量删除关注人 | `$client->task()->task()->batchDeleteFollower()` |
| 批量删除执行者 | `$client->task()->task()->batchDeleteCollaborator()` |
| 新增关注者 | `$client->task()->task()->createFollowers()` |
| 新增执行者 | `$client->task()->task()->createCollaborators()` |
| 新增提醒时间 | `$client->task()->task()->createReminders()` |
| 更新评论 | `$client->task()->task()->updateComments()` |
| 查询所有任务 | `$client->task()->task()->get()` |
| 查询指定任务 | `$client->task()->task()->get()` |
| 查询提醒时间列表 | `$client->task()->task()->getReminders()` |
| 获取关注者列表 | `$client->task()->task()->getFollowers()` |
| 获取执行者列表 | `$client->task()->task()->getCollaborators()` |
| 获取评论列表 | `$client->task()->task()->getComments()` |
| 获取评论详情 | `$client->task()->task()->getComments()` |

### MarkdownModule

| API Name | Call |
| --- | --- |
| 创建任务 | `$client->task()->markdownModule()->createTasks()` |
| 更新任务 | `$client->task()->markdownModule()->patchTasks()` |

## Tenant

### Tenant

| API Name | Call |
| --- | --- |
| 获取企业信息 | `$client->tenant()->tenant()->query()` |

## Translation

### Text

| API Name | Call |
| --- | --- |
| 翻译文本 | `$client->translation()->text()->translate()` |
| 识别文本语种 | `$client->translation()->text()->detect()` |

## User

### AppAdminUser

| API Name | Call |
| --- | --- |
| 查询应用管理员列表 | `$client->user()->appAdminUser()->getList()` |

## Vc

### Export

| API Name | Call |
| --- | --- |
| 下载导出文件 | `$client->vc()->export()->download()` |
| 导出会议室预定数据 | `$client->vc()->export()->createResourceReservationList()` |
| 导出会议明细 | `$client->vc()->export()->createMeetingList()` |
| 导出参会人会议质量数据 | `$client->vc()->export()->createParticipantQualityList()` |
| 导出参会人明细 | `$client->vc()->export()->createParticipantList()` |
| 查询导出任务结果 | `$client->vc()->export()->get()` |

### Meeting

| API Name | Call |
| --- | --- |
| 停止录制 | `$client->vc()->meeting()->patchRecordingStop()` |
| 开始录制 | `$client->vc()->meeting()->patchRecordingStart()` |
| 授权录制文件 | `$client->vc()->meeting()->patchRecordingSetPermission()` |
| 移除参会人 | `$client->vc()->meeting()->kickout()` |
| 结束会议 | `$client->vc()->meeting()->end()` |
| 获取与会议号相关联的会议列表 | `$client->vc()->meeting()->listByNo()` |
| 获取会议详情 | `$client->vc()->meeting()->get()` |
| 获取录制文件 | `$client->vc()->meeting()->getRecording()` |
| 设置主持人 | `$client->vc()->meeting()->setHost()` |
| 邀请参会人 | `$client->vc()->meeting()->invite()` |

### Report

| API Name | Call |
| --- | --- |
| 获取top用户列表 | `$client->vc()->report()->getTopUser()` |
| 获取会议报告 | `$client->vc()->report()->getDaily()` |

### ReserveConfig

| API Name | Call |
| --- | --- |
| 更新会议室预定范围 | `$client->vc()->reserveConfig()->patch()` |
| 获取会议室预定范围 | `$client->vc()->reserveConfig()->getReserveScope()` |

### Reserve

| API Name | Call |
| --- | --- |
| 删除预约 | `$client->vc()->reserve()->delete()` |
| 更新预约 | `$client->vc()->reserve()->update()` |
| 获取活跃会议 | `$client->vc()->reserve()->getActiveMeeting()` |
| 获取预约 | `$client->vc()->reserve()->get()` |
| 预约会议 | `$client->vc()->reserve()->apply()` |

### RoomLevel

| API Name | Call |
| --- | --- |
| 创建会议室层级 | `$client->vc()->roomLevel()->create()` |
| 删除会议室层级 | `$client->vc()->roomLevel()->del()` |
| 批量查询会议室层级详情 | `$client->vc()->roomLevel()->mget()` |
| 搜索会议室层级 | `$client->vc()->roomLevel()->search()` |
| 更新会议室层级 | `$client->vc()->roomLevel()->patch()` |
| 查询会议室层级列表 | `$client->vc()->roomLevel()->get()` |
| 查询会议室层级详情 | `$client->vc()->roomLevel()->get()` |

### Room

| API Name | Call |
| --- | --- |
| 创建会议室 | `$client->vc()->room()->create()` |
| 删除会议室 | `$client->vc()->room()->delete()` |
| 批量查询会议室详情 | `$client->vc()->room()->mget()` |
| 搜索会议室 | `$client->vc()->room()->search()` |
| 更新会议室 | `$client->vc()->room()->patch()` |
| 查询会议室列表 | `$client->vc()->room()->get()` |
| 查询会议室详情 | `$client->vc()->room()->get()` |

### ScopeConfig

| API Name | Call |
| --- | --- |
| 查询会议室配置 | `$client->vc()->scopeConfig()->get()` |
| 设置会议室配置 | `$client->vc()->scopeConfig()->create()` |

## Verification

### Verification

| API Name | Call |
| --- | --- |
| 获取认证信息 | `$client->verification()->verification()->get()` |

## Wiki

### Node

| API Name | Call |
| --- | --- |
| 搜索 Wiki | `$client->wiki()->node()->search()` |

### Space

| API Name | Call |
| --- | --- |
| 创建知识空间 | `$client->wiki()->space()->create()` |
| 创建知识空间节点 | `$client->wiki()->space()->createNodes()` |
| 创建知识空间节点副本 | `$client->wiki()->space()->createNodesCopy()` |
| 删除知识空间成员 | `$client->wiki()->space()->deleteMembers()` |
| 更新知识空间节点标题 | `$client->wiki()->space()->createNodesUpdateTitle()` |
| 更新知识空间设置 | `$client->wiki()->space()->updateSetting()` |
| 添加知识空间成员 | `$client->wiki()->space()->createMembers()` |
| 移动云空间文档至知识空间 | `$client->wiki()->space()->createNodesMoveDocsToWiki()` |
| 移动知识空间节点 | `$client->wiki()->space()->createNodesMove()` |
| 获取知识空间信息 | `$client->wiki()->space()->get()` |
| 获取知识空间列表 | `$client->wiki()->space()->get()` |
| 获取知识空间子节点列表 | `$client->wiki()->space()->getNodes()` |
| 获取知识空间节点信息 | `$client->wiki()->space()->getNode()` |

### Task

| API Name | Call |
| --- | --- |
| 获取任务结果 | `$client->wiki()->task()->get()` |
