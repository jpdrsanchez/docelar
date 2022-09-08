<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TalkRequestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public string $name, public string $email, public string $message, public string $talkTheme)
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nova solicitação de tema para palestra - ' . $this->name)->replyTo($this->email, $this->name)->markdown('emails.talks', [
            'name' => $this->name,
            'email' => $this->email,
            'talkTheme' => $this->talkTheme,
            'subject' => $this->message,
        ]);
    }
}