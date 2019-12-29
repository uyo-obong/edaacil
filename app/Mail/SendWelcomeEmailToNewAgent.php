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
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Manager $manager)
    {
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
        return $this->view($this->_config['view']);// please kindly create a view file that will return the random generated password to the agent.
    }
}
