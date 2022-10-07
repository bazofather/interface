<?php

class test {


    protected array $actions = [
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



    public function sendMessage($chat_id)
    {
        $url = $this->action('sendMessage');
    }

    public function actions(): array
    {
        return $this->actions;
    }

    public function addAction(array $action)
    {
        $this->actions[] = $action;
    }

    public function validateAction(string $action): bool
    {
        return in_array($action, $this->actions);
    }

    public function action($action): string
    {
        $acts = $this->validateAction($action);

        return $this->doAction($acts);
    }

    public function doAction(string $action)
    {
        return true;
    }

    public function sendText(int|string $chat_id, string $message)
    {
        // TODO: Implement sendText() method.
    }

    public function sendMessages(int|string $chat_id, array $messages, string $type = 'text')
    {
        // TODO: Implement sendMessages() method.
    }

    public function sendImage(int|string $chat_id, $image, ?string $caption)
    {
        // TODO: Implement sendImage() method.
    }

    public function sendVideo(int|string $chat_id, $video, ?string $caption)
    {
        // TODO: Implement sendVideo() method.
    }

    public function sendAudio(int|string $chat_id, $audio, ?string $caption)
    {
        // TODO: Implement sendAudio() method.
    }

    public function sendFile(int|string $chat_id, $file, ?string $caption)
    {
        // TODO: Implement sendFile() method.
    }

    public function sendVoice(int|string $chat_id, $voice, ?string $caption)
    {
        // TODO: Implement sendVoice() method.
    }

    public function sendLocation(int|string $chat_id, int|string $lat, int|string $long, ?string $caption)
    {
        // TODO: Implement sendLocation() method.
    }

    public function sendContact(int|string $chat_id, string $phone, string $name)
    {
        // TODO: Implement sendContact() method.
    }

    public function editTextMessage(int|string $chat_id, int $message_id, string $new_text)
    {
        // TODO: Implement editTextMessage() method.
    }

    public function deleteMessage(int|string $chat_id, int $message_id)
    {
        // TODO: Implement deleteMessage() method.
    }

    public function deleteMessages(int|string $chat_id, array $message_ids)
    {
        // TODO: Implement deleteMessages() method.
    }

    public function getMessage()
    {
        // TODO: Implement getMessage() method.
    }

    public function getMessages()
    {
        // TODO: Implement getMessages() method.
    }

    public function getMe()
    {
        // TODO: Implement getMe() method.
    }

    public function getChat()
    {
        // TODO: Implement getChat() method.
    }

    public function sendInvoice(string $chat_id)
    {
        // TODO: Implement sendInvoice() method.
    }

    public function sendImageInvoice(string $chat_id)
    {
        // TODO: Implement sendImageInvoice() method.
    }

    public function getChatNumber()
    {
        // TODO: Implement getChatNumber() method.
    }

    public function getUpdates()
    {
        // TODO: Implement getUpdates() method.
    }

    public function setWebhook()
    {
        // TODO: Implement setWebhook() method.
    }

    public function deleteWebhook()
    {
        // TODO: Implement deleteWebhook() method.
    }

    public function getChatAdministrators()
    {
        // TODO: Implement getChatAdministrators() method.
    }

    public function getChatMembersCount()
    {
        // TODO: Implement getChatMembersCount() method.
    }

    public function deleteBot()
    {
        // TODO: Implement deleteBot() method.
    }

    public function renameBot()
    {
        // TODO: Implement renameBot() method.
    }

    public function offBot()
    {
        // TODO: Implement offBot() method.
    }

    public function onBot()
    {
        // TODO: Implement onBot() method.
    }

    public function replyKeyboard()
    {
        // TODO: Implement replyKeyboard() method.
    }
}