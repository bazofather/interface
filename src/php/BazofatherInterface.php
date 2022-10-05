<?php 

namespace Bazofather\Interfaces\php;

/**
 * Common methods in all applications
 */
interface BazofatherInterface
{
    public function getToken();

    public function setToken($token);

    public function sendText($chat_id);

    public function sendMessage($chat_id);

    public function sendMessages();

    public function getMessage();

    public function editMessage($chat_id);

    public function getMessages();

    public function deleteMessage($chat_id);

    public function deleteMessages();

    public function getMe();

    public function getChat();

    public function sendFile($chat_id);

    public function sendInvoice($chat_id);

    public function sendImageInvoice($chat_id);

    public function sendContact($chat_id);

    public function sendImage($chat_id);

    public function getFile();
    
    public function getChatNumber();
    
    public function editMessageText();

    public function getupdates();

    public function setWebhook();

    public function deleteWebhook();

    public function sendPhoto($chat_id);

    public function sendAudio($chat_id);

    public function sendDocument($chat_id);

    public function sendVideo($chat_id);

    public function sendVoice($chat_id);

    public function sendLocation($chat_id);

    public function getChatAdministrators();

    public function getChatMembersCount();

    public function deleteBot();

    public function renameBot();

    public function offBot();

    public function onBot();

    public function replyKeyboard();


}
