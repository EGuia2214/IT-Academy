<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $mailContent;
 
    public function __construct(Request $mailContent)
    {
        $this->mailContent = $mailContent;
      
    }


    public function build()
    {

        //dd($this->mailContent);
        return $this->view('mails.inbox')
            ->with([
            'mailContentSubject' => $this->mailContent->subject,
            'mailContentName' => $this->mailContent->name,
            'mailContentEmail' => $this->mailContent->email,
            'mailContentMessage' => $this->mailContent->message,
            
        ]);
        
    }
}
