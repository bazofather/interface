<?php

class test {

    public function sendMessage($chat_id)
    {
        $url = $this->action('sendMessage');
    }

    public function action($action): string
    {
        $acts = $this->validateAction($action);

        return $this->doAction($acts);
    }

}