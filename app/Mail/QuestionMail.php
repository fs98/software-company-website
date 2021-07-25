<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuestionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $phone, $email, $question; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone, $question)
    {
        //
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->question = $question;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        return $this->markdown('emails.QuestionMail')
        ->to('info@yourcompany.com', 'Your Company')
        ->from($this->email, ucfirst($this->name))
        ->replyTo($this->email, ucfirst($this->name))
        ->subject('Novo pitanje od ' . ucfirst($this->name));
    }
}
