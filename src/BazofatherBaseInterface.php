<?php

namespace Bazofather\Interface;

/**
 * Common methods in all bazofather library
 */
interface BazofatherBaseInterface
{
    public function __construct();
    
    public function __clone();

    public static function getInstance();

    public function getToken();

    public function setToken(string $token);

    public function getBaseUrl(): string;

    public function setBaseUrl(string $url);

    // return available actions
    public function getActions(): array;

    // add new actions to current actions
    public function addActions(array $actions);

    public function doAction(string $action);

    public function validateAction(string $action): bool;

    public function getUpdates(): array;
}
