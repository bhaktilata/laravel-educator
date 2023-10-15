<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
//use Illuminate\Mail\Mailables\Content;
//use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;



class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $body;
    /**
     * Создать новый экземпляр класса и передать данные переменные.
     */
    public function __construct($body)
    {
         $this->body = $body;
        //$this->mailData = $mailData;
    }

    public function build()
    {
       // return $this->view('front.contact.senc');  // указывает на шаблон отправляемого письма
        return $this->view('front.contact.senc');
    }
   
}
