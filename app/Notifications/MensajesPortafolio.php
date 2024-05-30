<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MensajesPortafolio extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct($name, $email, $message)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/notifications');
        return (new MailMessage)
        ->subject('Nuevo mensaje de tu portafolio')
        ->line('Has recibido un mensaje de tu portafolio:')
        ->line('Nombre: ' . $this->name)
        ->line('Email: ' . $this->email)
        ->line('Mensaje: ' . $this->message)
        ->action('Ver todos los mensajes', $url);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];
    }

     // Almacena en base de datos
     public function toDatabase($notifiable)
     {
         return [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
         ];
         
     }

}
