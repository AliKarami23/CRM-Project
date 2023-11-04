<?php

namespace App\Http\Controllers;

use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\Keyboard\Keyboard;
use DefStudio\Telegraph\Telegraph;
use Illuminate\Http\Request;
use Spatie\FlareClient\Api;

class TelegramBotController extends Controller
{
    public function ShowResults(Request $request)
    {
        $customerCount = $this->getCustomerData();
        $adminSum = $this->getAdminData();
        $StoreCount = $this->getStoreData();
        $orderCount = $this->getOrderData();
        $productCount = $this->getProductData();
        $factorCount = $this->getFactorData();

        $message = "تعداد مشتریان: $customerCount\nمجموع ادمین‌ها: $adminSum\nتعداد فروشگاه ها: $StoreCount\nتعداد سفارشات: $orderCount\nتعداد محصولات: $productCount\nتعداد فاکتورها: $factorCount";
        Telegraph::message($message)
            ->keyboard(Keyboard::make()->buttons([
                Button::make('Customer')->action('getCustomerData'),
                Button::make('Admin')->action('getAdminData'),
                Button::make('Store')->action('getStoreData'),
                Button::make('Order')->action('getOrderData'),
                Button::make('Product')->action('getProductData'),
                Button::make('Factor')->action('getFactorData'),
            ]))->send();
    }

    public function action(Request $request)
    {
        $message = $request->input('message');

        switch ($message) {
            case 'getCustomerData':
                $customerCount = $this->getCustomerData();
                $this->sendMessageWithKeyboard("تعداد مشتریان: $customerCount");
                break;

            case 'getAdminData':
                $adminSum = $this->getAdminData();
                $this->sendMessageWithKeyboard("مجموع ادمین‌ها: $adminSum");
                break;

            case 'getStoreData':
                $StoreCount = $this->getStoreData();
                $this->sendMessageWithKeyboard("تعداد فروشندگان: $StoreCount");
                break;

            case 'getOrderData':
                $orderCount = $this->getOrderData();
                $this->sendMessageWithKeyboard("تعداد سفارشات: $orderCount");
                break;

            case 'getProductData':
                $productCount = $this->getProductData();
                $this->sendMessageWithKeyboard("تعداد محصولات: $productCount");
                break;

            case 'getFactorData':
                $factorCount = $this->getFactorData();
                $this->sendMessageWithKeyboard("تعداد فاکتورها: $factorCount");
                break;

            default:
                $this->ShowResults();
                break;
        }
    }


    private function sendMessageWithKeyboard($message)
    {
        Telegraph::message($message)
            ->keyboard(Keyboard::make()->buttons([
                Button::make('Back to Main Menu')->action('mainMenu'),
            ]))->send();
    }


    private function getCustomerData()
    {
        return 10;
    }

    private function getAdminData()
    {
        return 5;
    }

    private function getStoreData()
    {
        return 5;
    }
    private function getOrderData()
    {
        return 5;
    }
    private function getProductData()
    {
        return 5;
    }
    private function getFactorData()
    {
        return 5;
    }

}
