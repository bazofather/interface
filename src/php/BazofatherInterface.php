<?php 

namespace Bazofather\Interfaces\php;

interface BazofatherInterface
{
    public function sendMessage();

    public function sendMessages();

    public function getMessage();

    public function getMessages();

    public function deleteMessage();

    public function deleteMessages();

    public function getMe();

    public function getChat();

    public function getFile();
    
    public function getChatNumber();
    
    public function editMessageText();

    public function getupdates();

    public function setWebhook();

    public function deleteWebhook();

    public function sendPhoto();

    public function sendAudio();

    public function sendDocument();

    public function sendVideo();

    public function sendVoice();

    public function sendLocation();

    public function getChatAdministrators();

    public function getChatMembersCount();

    public function sendInvoice();


}
