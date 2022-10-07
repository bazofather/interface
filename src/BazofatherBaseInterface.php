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

    public function getUpdates(): array;
}
