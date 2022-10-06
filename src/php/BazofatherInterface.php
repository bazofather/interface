<?php

namespace Bazofather\Interfaces\php;

/**
 * Common methods in all applications
 */
interface BazofatherInterface
{
    public function getToken();

    public function setToken(string $token);

    public function getBaseUrl(): string;

    public function setBaseUrl(string $url);

    // return available actions
    public function actions(): array;

    // add new actions to current actions
    public function addActions(array $action);

    // send text message
    public function sendText(string|int $chat_id, string $message);

    // send multiple messages
    public function sendMessages(string|int $chat_id, array $messages, string $type = 'text');

    public function sendImage(string|int $chat_id, $image, ?string $caption);

    public function sendVideo(string|int $chat_id, $video, ?string $caption);

    public function sendAudio(string|int $chat_id, $audio, ?string $caption);

    public function sendFile(string|int $chat_id, $file, ?string $caption);

    public function sendVoice(string|int $chat_id, $voice, ?string $caption);

    public function sendLocation(string|int $chat_id, string|int $lat, string|int $long, ?string $caption);

    public function sendContact(string|int $chat_id, string $phone, string $name);

    public function editTextMessage(string|int $chat_id, int $message_id, string $new_text);

    public function deleteMessage(string|int $chat_id, int $message_id);

    public function deleteMessages(string|int $chat_id, array $message_ids);










    public function getMessage();

    public function getMessages();


    public function getMe();

    public function getChat();


    public function sendInvoice(string $chat_id);

    public function sendImageInvoice(string $chat_id);


    public function getChatNumber();


    public function getUpdates();

    public function setWebhook();

    public function deleteWebhook();

    public function getChatAdministrators();

    public function getChatMembersCount();

    public function deleteBot();

    public function renameBot();

    public function offBot();

    public function onBot();

    public function replyKeyboard();
}
