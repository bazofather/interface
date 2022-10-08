<?php

namespace Bazofather\Interface;

/**
 * Common methods in all application bot platform api
 */
interface BazofatherCommonInterface
{
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


}