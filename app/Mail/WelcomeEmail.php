<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $Email;
    protected $PhoneNumber;
    protected $FullName;

    /**
     * Create a new message instance.
     */
    public function __construct($PhoneNumber, $FullName)
    {
        $this->PhoneNumber = $PhoneNumber;
        $this->FullName = $FullName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(new Address('info@ali.com', 'ali.com support'))
            ->subject('Email Welcome')
            ->view('welcomeEmail')
            ->with([
                'PhoneNumber' => $this->PhoneNumber,
                'FullName' => $this->FullName
            ]);
    }
}
