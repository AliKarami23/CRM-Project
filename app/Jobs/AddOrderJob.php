<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Mail\OrderEmail;
use Illuminate\Support\Facades\Mail;

class AddOrderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $content;

    /**
     * Create a new job instance.
     *
     * @param string $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $toEmail = 'receiver@example.com';
        Mail::to($toEmail)->send(new OrderEmail($this->content));
    }
}
