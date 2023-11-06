<?php

namespace App\Handler;

use App\Models\Factor;
use App\Models\Order;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
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

    public function product(){
        $productCount = Product::count();
        $this->chat->message("تعداد محصولات: " . $productCount)->send();
    }

    public function factor(){
        $factorCount = Factor::count();
        $this->chat->message("تعداد فاکتورها: " . $factorCount)->send();
    }

}
