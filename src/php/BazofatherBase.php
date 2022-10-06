<?php

namespace Bazofather\Interfaces\php;

abstract class BazofatherBase implements BazofatherInterface
{

    /**
     * current version
     *
     * @var string
     */
    private string $version;

    /**
     * Bale bot object
     *
     * @var object
     */
    private object $botInstance;

    /**
     * Bale bot api token
     *
     * @var string
     */
    private string $token;

    /**
     * Bale bot api url
     *
     * @var string
     */
    private string $base_api_url;

    /**
     * Bale bot file api url
     * for download - upload files
     *
     * @var string
     */
    private string $base_file_url;

    private $actions = [
        'sendMessage',
        'editMessageText',
        'deleteMessage',
        'getupdates',
        'setWebhook',
        'deleteWebhook',
        'getMe',
        'sendPhoto',
        'sendAudio',
        'sendDocument',
        'sendVideo',
        'sendVoice',
        'sendLocation',
        'sendContact',
        'getFile',
        'getChat',
        'getChatAdministrators',
        'getChatMembersCount',
        'getChatMember',
        'sendInvoice',
        'getChatMembersCount',
        'getChatMembersCount',
        'getChatMembersCount',
    ];

    public function __construct()
    {
        //
    }

    public function setToken(string $token)
    {
        $this->token = $token;
        return $this;
    }

    public function token(): string
    {
        return $this->token;
    }

    public function sendMessage($chat_id)
    {
        $url = $this->action('sendMessage');
    }

    public function action($action): string
    {
        $acts = $this->validateAction($action);
        return "$this->base_api_url/bot$this->token/$acts";
    }

    public function validateAction(string $action): bool
    {
        return in_array($action, $this->actions);
    }
}
