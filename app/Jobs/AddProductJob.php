<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\ProductEmail;
use Illuminate\Support\Facades\Mail;

class AddProductJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $Product_name;

    /**
     * Create a new job instance.
     *
     * @param string Product_name
     */
    public function __construct($Product_name)
    {
        $this->Product_name = $Product_name;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $toEmail = 'ali@gmail.com';
        Mail::to($toEmail)->send(new ProductEmail($this->Product_name));
    }
}
