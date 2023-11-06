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
        $keyboard = Keyboard::create()
            ->row(
                Button::create('مشاهده ادمین‌ها')->callbackData('admin'),
                Button::create('مشاهده مشتریان')->callbackData('customer')
            )
            ->row(
                Button::create('مشاهده فروشگاه‌ها')->callbackData('store'),
                Button::create('مشاهده سفارش‌ها')->callbackData('order')
            )
            ->row(
                Button::create('مشاهده محصولات')->callbackData('product')
            );

        $this->chat->message('لطفاً یک گزینه را انتخاب کنید:')->options($keyboard)->send();    }

    public function start(){
        $keyboard = Keyboard::create()
            ->row(
                Button::create('مشاهده ادمین‌ها')->callbackData('admin'),
                Button::create('مشاهده مشتریان')->callbackData('customer')
            )
            ->row(
                Button::create('مشاهده فروشگاه‌ها')->callbackData('store'),
                Button::create('مشاهده سفارش‌ها')->callbackData('order')
            )
            ->row(
                Button::create('مشاهده محصولات')->callbackData('product')
            );

        $this->chat->message('لطفاً یک گزینه را انتخاب کنید:')->options($keyboard)->send();
    }



    public function admin(){
        $adminCount = User::where('Role', 'Admin')->count();
        $this->chat->message("تعداد مدیران: " . $adminCount)->send();
    }

    public function customer(){
        $customerCount = User::where('Role', 'Customer')->count();
        $this->chat->message("تعداد مشتریان: " . $customerCount)->send();
    }

    public function store(){
        $storeCount = Store::count();
        $this->chat->message("تعداد فروشگاه‌ها: " . $storeCount)->send();
    }

    public function order(){
        $orderCount = Order::count();
        $this->chat->message("تعداد سفارش‌ها: " . $orderCount)->send();
    }

    public function product(){
        $productCount = Product::count();
        $this->chat->message("تعداد محصولات: " . $productCount)->send();
    }

    public function factor(){
        $productCount = Factor::count();
        $this->chat->message("تعداد فاکتور ها: " . $productCount)->send();    }
}
