<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public array $data)
    {

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('no-reply@moonopticienlunetier.com', 'Moon Opticien Lunetier'),
            to: 'contact@moonopticienlunetier.com',
            replyTo: $this->data['email'],
            subject: 'Nouveau message : ' . $this->data['lastname'] . ' ' . $this->data['firstname'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if(isset($this->data['prescription-file'])) {
            return [
                Attachment::fromPath($this->data['prescription-file']->getRealPath())
                    ->as($this->data['prescription-file']->getClientOriginalName())
                    ->withMime($this->data['prescription-file']->getClientMimeType()),
            ];
        }

        return [];
    }
}
