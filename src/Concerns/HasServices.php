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

namespace Lark\Concerns;

use Lark\Services\AcsService;
use Lark\Services\AdminService;
use Lark\Services\ApplicationService;
use Lark\Services\ApprovalService;
use Lark\Services\AttendanceService;
use Lark\Services\AuthenService;
use Lark\Services\BaikeService;
use Lark\Services\BitableService;
use Lark\Services\CalendarService;
use Lark\Services\ContactService;
use Lark\Services\CorehrService;
use Lark\Services\DocService;
use Lark\Services\DocxService;
use Lark\Services\DriveService;
use Lark\Services\EhrService;
use Lark\Services\EphemeralService;
use Lark\Services\EventService;
use Lark\Services\FaceVerifyService;
use Lark\Services\HelpdeskService;
use Lark\Services\HireService;
use Lark\Services\HumanAuthenticationService;
use Lark\Services\ImService;
use Lark\Services\InteractiveService;
use Lark\Services\MailService;
use Lark\Services\MeetingRoomService;
use Lark\Services\MessageService;
use Lark\Services\MinutesService;
use Lark\Services\OkrService;
use Lark\Services\OpticalCharRecognitionService;
use Lark\Services\PassportService;
use Lark\Services\PayService;
use Lark\Services\PersonalSettingsService;
use Lark\Services\SearchService;
use Lark\Services\SheetsService;
use Lark\Services\SpeechToTextService;
use Lark\Services\SuiteService;
use Lark\Services\TaskService;
use Lark\Services\TenantService;
use Lark\Services\TranslationService;
use Lark\Services\UserService;
use Lark\Services\VcService;
use Lark\Services\VerificationService;
use Lark\Services\WikiService;

trait HasServices
{
    public function acs(): AcsService
    {
        return new AcsService($this);
    }

    public function admin(): AdminService
    {
        return new AdminService($this);
    }

    public function application(): ApplicationService
    {
        return new ApplicationService($this);
    }

    public function approval(): ApprovalService
    {
        return new ApprovalService($this);
    }

    public function attendance(): AttendanceService
    {
        return new AttendanceService($this);
    }

    public function authen(): AuthenService
    {
        return new AuthenService($this);
    }

    public function baike(): BaikeService
    {
        return new BaikeService($this);
    }

    public function bitable(): BitableService
    {
        return new BitableService($this);
    }

    public function calendar(): CalendarService
    {
        return new CalendarService($this);
    }

    public function contact(): ContactService
    {
        return new ContactService($this);
    }

    public function corehr(): CorehrService
    {
        return new CorehrService($this);
    }

    public function doc(): DocService
    {
        return new DocService($this);
    }

    public function docx(): DocxService
    {
        return new DocxService($this);
    }

    public function drive(): DriveService
    {
        return new DriveService($this);
    }

    public function ehr(): EhrService
    {
        return new EhrService($this);
    }

    public function ephemeral(): EphemeralService
    {
        return new EphemeralService($this);
    }

    public function event(): EventService
    {
        return new EventService($this);
    }

    public function faceVerify(): FaceVerifyService
    {
        return new FaceVerifyService($this);
    }

    public function helpdesk(): HelpdeskService
    {
        return new HelpdeskService($this);
    }

    public function hire(): HireService
    {
        return new HireService($this);
    }

    public function humanAuthentication(): HumanAuthenticationService
    {
        return new HumanAuthenticationService($this);
    }

    public function im(): ImService
    {
        return new ImService($this);
    }

    public function interactive(): InteractiveService
    {
        return new InteractiveService($this);
    }

    public function mail(): MailService
    {
        return new MailService($this);
    }

    public function meetingRoom(): MeetingRoomService
    {
        return new MeetingRoomService($this);
    }

    public function message(): MessageService
    {
        return new MessageService($this);
    }

    public function minutes(): MinutesService
    {
        return new MinutesService($this);
    }

    public function okr(): OkrService
    {
        return new OkrService($this);
    }

    public function opticalCharRecognition(): OpticalCharRecognitionService
    {
        return new OpticalCharRecognitionService($this);
    }

    public function passport(): PassportService
    {
        return new PassportService($this);
    }

    public function pay(): PayService
    {
        return new PayService($this);
    }

    public function personalSettings(): PersonalSettingsService
    {
        return new PersonalSettingsService($this);
    }

    public function search(): SearchService
    {
        return new SearchService($this);
    }

    public function sheets(): SheetsService
    {
        return new SheetsService($this);
    }

    public function speechToText(): SpeechToTextService
    {
        return new SpeechToTextService($this);
    }

    public function suite(): SuiteService
    {
        return new SuiteService($this);
    }

    public function task(): TaskService
    {
        return new TaskService($this);
    }

    public function tenant(): TenantService
    {
        return new TenantService($this);
    }

    public function translation(): TranslationService
    {
        return new TranslationService($this);
    }

    public function user(): UserService
    {
        return new UserService($this);
    }

    public function vc(): VcService
    {
        return new VcService($this);
    }

    public function verification(): VerificationService
    {
        return new VerificationService($this);
    }

    public function wiki(): WikiService
    {
        return new WikiService($this);
    }
}
