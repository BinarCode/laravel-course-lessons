<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;

class SampleNotification extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail', 'database', 'nexmo'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Hey ' . $notifiable->first_name)
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'first_name' => $notifiable->first_name,
        ];
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
            ->content('Your SMS message content');
    }
}
