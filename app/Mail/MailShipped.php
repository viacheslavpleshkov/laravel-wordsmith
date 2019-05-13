<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class MailShipped
 * @package App\Mail
 */
class MailShipped extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var
     */
    public $mail;

    /**
     * MailShipped constructor.
     * @param $mail
     */
    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return MailShipped
     */
    public function build()
    {
        return $this->to($this->mail->email, $this->mail->name)
            ->subject('Contact form | Wordsmith')
            ->markdown('emails.mail.shipped');
    }
}