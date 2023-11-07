<?php

namespace App\Http\Controllers;

use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use DefStudio\Telegraph\Models\TelegraphBot;
use DefStudio\Telegraph\Models\TelegraphChat;
use DefStudio\Telegraph\Telegraph;
use Illuminate\Http\Request;
use Spatie\FlareClient\Api;

class TelegramBotController extends Controller
{
    public function start(Request $request)
    {
        $telegraph = new Telegraph();

        $message = "لطفا یک گزینه را انتخاب کنید:";
        $telegraph->message($message)
            ->keyboard(Keyboard::make()->buttons([
                Button::make('Customer')->action('getCustomerData'),
                Button::make('Admin')->action('getAdminData'),
                Button::make('Store')->action('getStoreData'),
                Button::make('Order')->action('getOrderData'),
                Button::make('Product')->action('getProductData'),
                Button::make('Factor')->action('getFactorData'),
            ]))->send();
//        $chat_tem = TelegraphBot::create([
//            'token' => '6957060195:AAHO38f9qFUi972pMND0lxSe28bzYIhO7N8',
//            'name' => 'test',
//        ]);



//        $chat = TelegraphChat::create([
//            'chat_id' => $chatId,
//            'name' => 'test',
//            'telegraph_bot_id' => '1'
//        ]);

    }

    public function action(Request $request)
    {
        $message = $request->input('message');

        switch ($message) {
            case 'getCustomerData':
                $customerCount = $this->getCustomerData();
                $this->sendMessage("تعداد مشتریان: $customerCount");
                break;

            case 'getAdminData':
                $adminSum = $this->getAdminData();
                $this->sendMessage("مجموع ادمین‌ها: $adminSum");
                break;

            case 'getStoreData':
                $storeCount = $this->getStoreData();
                $this->sendMessage("تعداد فروشندگان: $storeCount");
                break;

            case 'getOrderData':
                $orderCount = $this->getOrderData();
                $this->sendMessage("تعداد سفارشات: $orderCount");
                break;

            case 'getProductData':
                $productCount = $this->getProductData();
                $this->sendMessage("تعداد محصولات: $productCount");
                break;

            case 'getFactorData':
                $factorCount = $this->getFactorData();
                $this->sendMessage("تعداد فاکتورها: $factorCount");
                break;

            default:
                $this->start($request);
                break;
        }
    }

    private function sendMessage($message)
    {
        $telegraph = new Telegraph();

        $telegraph->message($message)
            ->keyboard(Keyboard::make()->buttons([
                Button::make('Back to Main Menu')->action('start'),
            ]))->send();
    }

    private function getCustomerData()
    {
        // انجام عملیات مربوط به مشتریان و بازگشت مقدار
        return 10;
    }

    private function getAdminData()
    {
        // انجام عملیات مربوط به ادمین‌ها و بازگشت مقدار
        return 5;
    }

    private function getStoreData()
    {
        // انجام عملیات مربوط به فروشگاه‌ها و بازگشت مقدار
        return 5;
    }

    private function getOrderData()
    {
        // انجام عملیات مربوط به سفارشات و بازگشت مقدار
        return 5;
    }

    private function getProductData()
    {
        // انجام عملیات مربوط به محصولات و بازگشت مقدار
        return 5;
    }

    private function getFactorData()
    {
        // انجام عملیات مربوط به فاکتورها و بازگشت مقدار
        return 5;
    }
}
