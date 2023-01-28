<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SchoolMailVarify extends Mailable
{
    use Queueable, SerializesModels;
<<<<<<< HEAD:app/Mail/SchoolQuiz.php
<<<<<<< HEAD
    public $details;
=======

>>>>>>> school_quiz
=======
    public $details;
>>>>>>> school_quiz:app/Mail/SchoolMailVarify.php
    /**
     * Create a new message instance.
     *
     * @return void
     */
<<<<<<< HEAD:app/Mail/SchoolQuiz.php
<<<<<<< HEAD
    public function __construct($details)
    {
        $this->details = $details;
=======
    public function __construct()
    {
        //
>>>>>>> school_quiz
=======
    public function __construct($details)
    {
        $this->details = $details;
    }
    public function build(){
        return $this->subject('No Reply')->view('emails.schoolmail');
>>>>>>> school_quiz:app/Mail/SchoolMailVarify.php
    }
    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('test@geetauniversity.edu.in', 'Geeta University'),
            subject: 'No Reply',
        );
    }
<<<<<<< HEAD
    
=======
>>>>>>> school_quiz

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.schoolmail',
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
