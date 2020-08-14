<?php

namespace Edaacil\Mail;

use Edaacil\Modules\Manager\Http\Models\Manager;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendWelcomeEmailToNewAgent extends Mailable
{
    use Queueable, SerializesModels;

    public $manager;

    public $_config;

    public $password;

    /**
     * Create a new message instance.
     * @param Manager $manager
     * @param $password
     */
    public function __construct(Manager $manager, $password)
    {
        $this->password=$password;
        $this->manager=$manager;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Congratulations')
                    ->view('emails.welcome');

    }
}
