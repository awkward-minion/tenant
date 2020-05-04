<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserWelcome extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('vendor.notifications.email', [
            'level' => 'success',
            'introLines' => [
                'Confirm your email address to complete the registration process',
                'To get started you need to set a password.'
            ],
            'outroLines' => [
                'To get started you need to set a password. this is outro'
            ],
            'actionText' => 'Set Password',
            'actionUrl' => 'https://google.com',
            'greeting' => 'Hello Minion'
        ]);
    }
}
