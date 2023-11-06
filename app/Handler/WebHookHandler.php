<?php

namespace App\Handler;

use DefStudio\Telegraph\Handlers\EmptyWebhookHandler;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Illuminate\Support\Stringable;

class WebHookHandler extends EmptyWebhookHandler
{

    public function handleChatMessage(Stringable $text): void
    {
        $this->chat->message('ok')->send();
    }

    public function start(){
        $this->chat->message('start ok')->send();
    }

}
