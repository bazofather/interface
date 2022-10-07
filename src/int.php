<?php

interface test{

    public function getMessage();

    public function getMessages();

    public function getMe();

    public function getChat();

    public function sendInvoice(string $chat_id);

    public function sendImageInvoice(string $chat_id);

    public function getChatNumber();

    public function setWebhook();

    public function deleteWebhook();

    public function getChatAdministrators();

    public function getChatMembersCount();

    public function deleteBot();

    public function offBot();

    public function onBot();

    public function replyKeyboard();
}