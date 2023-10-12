<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Letters extends Mailable
{
    use Queueable, SerializesModels;

    public mixed $name;
    public mixed $email;
    public mixed $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $message)
    {
        //
        $this->name = $name;
        $this->email=$email;
        $this->message=$message;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('jeffrey@example.com'),
            to: new Address('jeffrey@example.com'),
            subject: 'Order Shipped',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'mail.contacts.letters',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
