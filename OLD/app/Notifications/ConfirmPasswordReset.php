<?php

namespace Edaacil\Notifications;

use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class ConfirmPasswordReset extends Notification
{
    use Queueable;

    /**
     * @var Manager
     */
    private $agent;

    /**
     * Create a new notification instance.
     *
     * @param Manager $agent
     */
    public function __construct(Manager $agent)
    {
        $this->agent = $agent;
        $this->url = URL::to('/');
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
            ->view('emails.confirm-password-reset', [
                'agent' => $this->agent,
                'url'  => $this->url
            ])
            ->subject('Congratulations');

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
