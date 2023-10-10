<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail; // Assuming you have a WelcomeEmail class

class SingUpEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $Email;
    protected $content;
    protected $PhoneNumber;
    protected $FullName;

    /**
     * Create a new job instance.
     *
     * @param string $Email
     * @param string $content
     */
    public function __construct($PhoneNumber,$FullName)
    {
        $this->PhoneNumber = $PhoneNumber;
        $this->FullName = $FullName;

    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        Mail::to('ali@gmail.com')->send(new WelcomeEmail($this->PhoneNumber, $this->FullName));
    }
}
