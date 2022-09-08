<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public string $name, public string $email, public string $message)
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nova solicitação de contato - ' . $this->name)->replyTo($this->email, $this->name)->markdown('emails.contact', [
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->message,
        ]);
    }
}