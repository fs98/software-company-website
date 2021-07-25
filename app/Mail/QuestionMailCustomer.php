<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuestionMailCustomer extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $mailSubject, $mailGreeting, $mailFirstLine, $mailSecondLine, $mailThirdLine, $mailThanks; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $mailSubject, $mailGreeting, $mailFirstLine, $mailSecondLine, $mailThirdLine, $mailThanks)
    {
        //
        $this->name = $name;
        $this->email = $email; 
        $this->mailSubject = $mailSubject;
        $this->mailGreeting = $mailGreeting; 
        $this->mailFirstLine = $mailFirstLine; 
        $this->mailSecondLine = $mailSecondLine; 
        $this->mailThirdLine = $mailThirdLine; 
        $this->mailThanks = $mailThanks; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        return $this->markdown('emails.QuestionMailCustomer')
        ->to($this->email, ucfirst($this->name))
        ->from('no-reply@yourcompany.com', 'Your Company') 
        ->subject($this->mailSubject);
    }
}
