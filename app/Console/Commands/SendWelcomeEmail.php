<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class SendWelcomeEmail extends Command
{
    protected $signature = 'send:welcome-email';

    protected $description = 'Send welcome email to new users';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            $content = "Dear user, welcome to our platform. We're glad to have you on board.";
            $email = $user->email;
            Mail::to($email)->send(new WelcomeEmail());
        }

        $this->info('Welcome emails sent successfully.');
    }
}
