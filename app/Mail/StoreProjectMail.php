<?php

namespace App\Mail;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StoreProjectMail extends Mailable
{
    use Queueable, SerializesModels;

    private Project $project;
    /**
     * Create a new message instance.
     */
    public function __construct(Project $project)
    {
     $this -> project = $project;   
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Store Project Mail',
        );
    }

    public function build()
    {
        return $this->view('emails.store-project-mail', [
            'project' => $this->project
        ]);
    }

    /**
     * Get the message content definition.
     */


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
