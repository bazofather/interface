<?php

namespace Bazofather\Interface;

class BazofatherBase implements BazofatherBaseInterface
{

    /**
     * Class Bot singleton object
     *
     * @var ?object
     */
    protected static ?object $instance = null;

    /**
     * Bot api token
     *
     * @var string
     */
    protected string $token;

    /**
     * Bale bot api url
     *
     * @var string
     */
    protected string $base_api_url;

    /** @var array
     * available common actions
     * add your custom actions in your library
     */
    protected array $actions = [
        "sendText",
        "sendMessages",
        "sendImage",
        "sendVideo",
        "sendAudio",
        "sendFile",
        "sendVoice",
        "sendLocation",
        "sendContact",
        "editTextMessage",
        "deleteMessage",
        "deleteMessages",
        "getUpdates",
    ];

    public function __construct()
    {
        //
    }

    public function  __clone()
    {
        //
    }

    public static function getInstance()
    {
        if( is_null(self::$instance) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setToken(string $token): static
    {
        $this->token = $token;
        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setBaseUrl(string $url): static
    {
        $this->base_api_url = $url;
        return $this;
    }

    public function getBaseUrl(): string
    {
        return $this->base_api_url;
    }

    public function getActions(): array
    {
        return $this->actions;
    }

    public function doAction(string $action)
    {
        //
    }

    public function addActions(array $actions)
    {
        $this->actions[] = $actions;
    }

    public function validateAction(string $action): bool
    {
        return in_array($action, $this->actions);
    }

    public function getUpdates(): array
    {
        return [];
    }

}
