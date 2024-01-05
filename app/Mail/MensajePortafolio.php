<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MensajePortafolio extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $email;
    public $name;

    public function __construct($name, $email, $message)
    {
        $this->name=$name;
        $this->email=$email;
        $this->message=$message;
    }

    public function build()
    {
        $name = $this->name;
        $email = $this->email;
        $messages = $this->message;

        // asunto
        $subject = 'Mensaje de portafolio';

        return $this->view('emails.mensaje-portafolio', compact('name', 'email', 'messages'))
                    ->from($email, $name)
                    ->subject($subject);
    }

 
    
}
