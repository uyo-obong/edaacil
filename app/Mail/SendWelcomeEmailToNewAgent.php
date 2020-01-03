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
     *
     * @return void
     */
    public function __construct(Manager $manager, $password)
    {
        $this->password=$password;
        $this->manager=$manager;

        $this->_config = request('_config');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcome');

    }
}
