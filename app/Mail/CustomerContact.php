<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerContact extends Mailable
{
    use Queueable, SerializesModels;

    public $data = null;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        $this->build();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(sprintf('%s ha dejado un mensaje', $this->data['name']))
            ->from($this->data['email'])
            ->to(config('mail.from.address'))
            ->markdown('emails.customer.contact');
    }
}
