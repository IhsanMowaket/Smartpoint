<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Twilio\TwilioChannel;
use NotificationChannels\Twilio\TwilioSmsMessage;

class LoginNeedsVerification extends Notification
{
    public function __construct()
    {
    }

    public function via($notifiable): array
    {
        return [TwilioChannel::class];
    }


    public function toTwilio($notifiable){
        $LoginCode = rand(111111,999999);
        $notifiable->update([
            'login_code'=> $LoginCode
        ]);
        return (new TwilioSmsMessage())->content("Your One Time Login Code is {$LoginCode}");
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
