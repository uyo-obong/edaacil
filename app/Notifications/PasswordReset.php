<?php

namespace Edaacil\Notifications;

use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;

class PasswordReset extends Notification
{
    use Queueable,Notifiable;

    public $token;

    public $agent;

    /**
     * Create a new notification instance.
     *
     * @param Manager $agent
     * @param $token
     */
    public function __construct(Manager $agent, $token)
    {
        $this->agent = $agent;
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        return (new MailMessage)
            ->view('emails.reset-password', [
                'agent' => $this->agent,
                'token' => $this->token
            ])
            ->subject('Password Reset');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
